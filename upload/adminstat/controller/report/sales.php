<?php
namespace Opencart\Admin\Controller\Report;

class Sales extends \Opencart\System\Engine\Controller {
    public function index(): void {
        // Languages
        $this->load->language('report/sales');

        $this->document->setTitle($this->language->get('heading_title'));

        // View vars
        $data['heading_title'] = $this->language->get('heading_title');
        $data['button_filter'] = $this->language->get('button_filter');
        $data['button_refresh'] = $this->language->get('button_refresh');
        $data['entry_date_start'] = $this->language->get('entry_date_start');
        $data['entry_date_end'] = $this->language->get('entry_date_end');
        // Texts used in Twig cards/headers
        $data['text_total_sales'] = $this->language->get('text_total_sales');
        $data['text_refunds'] = $this->language->get('text_refunds');
        $data['text_top_payment_methods'] = $this->language->get('text_top_payment_methods');
        $data['text_view_details'] = $this->language->get('text_view_details') ?? 'View Details';


        // Breadcrumbs
        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('report/sales', 'user_token=' . $this->session->data['user_token'])
        ];

        // API endpoints for AJAX
        $query_string = 'user_token=' . $this->session->data['user_token']
            . '&date_start=' . urlencode($this->request->get['date_start'] ?? '')
            . '&date_end=' . urlencode($this->request->get['date_end'] ?? '');
        $data['chart_url'] = $this->url->link('report/sales|chart', $query_string);
        $data['refunds_chart_url'] = $this->url->link('report/sales|refundsChart', $query_string);
        $data['top_payments_url'] = $this->url->link('report/sales|topPayments', $query_string);
        // Payments details page URL
        $data['payments_details_url'] = $this->url->link('report/sales|detailsPayments', $query_string);

        // Filters (defaults last 30 days)
        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));
        $data['date_start'] = $date_start;
        $data['date_end'] = $date_end;

        // KPIs from oc_order
        $prefix = DB_PREFIX;
        $sql_where = " WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "'";
        // Consider completed-like statuses; if you have a config for 'complete_status' use it. Here include all > 0
        $sql_where .= " AND o.order_status_id > 0";

        $result = $this->db->query(
            "SELECT COUNT(*) AS orders, SUM(o.total) AS revenue, AVG(o.total) AS aov FROM `{$prefix}order` o" . $sql_where
        );

        $data['kpi_orders'] = (int)($result->row['orders'] ?? 0);
        $data['kpi_revenue'] = (float)($result->row['revenue'] ?? 0);
        $data['kpi_aov'] = (float)($result->row['aov'] ?? 0);

        // Formatted strings
        $currency_code = $this->config->get('config_currency');
        $data['kpi_revenue_formatted'] = $this->currency->format($data['kpi_revenue'], $currency_code);
        $data['kpi_aov_formatted'] = $this->currency->format($data['kpi_aov'], $currency_code);

        // Overall total revenue (for percentage comparison against filtered)
        $overall = $this->db->query("SELECT SUM(o.total) AS revenue FROM `{$prefix}order` o WHERE o.order_status_id > 0");
        $overall_revenue = (float)($overall->row['revenue'] ?? 0);
        $data['kpi_revenue_percent'] = $overall_revenue > 0 ? round(($data['kpi_revenue'] / $overall_revenue) * 100) : 0;

        // View details URL (sales details within selected range)
        $data['details_url'] = $this->url->link('report/sales|details', 'user_token=' . $this->session->data['user_token'] . '&date_start=' . urlencode($date_start) . '&date_end=' . urlencode($date_end) . '&interval=day');

        // Include page script (Chart.js is loaded via CDN in Twig)
        $this->document->addScript('view/javascript/report/sales.js');

        // Common layout
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->load->model('report/sales');



        $this->response->setOutput($this->load->view('report/sales', $data));
    }

    /**
     * Details page: table of totals grouped by day/month/year in selected range
     */
    public function details(): void {
        $this->load->language('report/sales');

        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));
        $interval = strtolower($this->request->get['interval'] ?? 'day'); // day|month|year
        if (!in_array($interval, ['day', 'month', 'year'], true)) $interval = 'day';



        $data['date_start'] = $date_start;
        $data['date_end'] = $date_end;
        $data['interval'] = $interval;

        // Build empty period map depending on interval
        $period = [];
        $start = strtotime($date_start);
        $end = strtotime($date_end);
        $fmt = 'Y-m-d';
        $step = '+1 day';
        if ($interval === 'month') { $fmt = 'Y-m'; $step = '+1 month'; }
        if ($interval === 'year') { $fmt = 'Y'; $step = '+1 year'; }
        $cursor = strtotime(date($fmt, $start) . ( $interval==='day' ? '' : '-01' ));
        while ($cursor <= $end) {
            $key = date($fmt, $cursor);
            $period[$key] = ['orders' => 0, 'total' => 0.0];
            $cursor = strtotime($step, $cursor);
        }

        // Query according to interval
        $prefix = DB_PREFIX;
        if ($interval === 'day') {
            $sql = "SELECT DATE(o.date_added) AS p, COUNT(*) AS orders, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE(o.date_added) ORDER BY p";
        } elseif ($interval === 'month') {
            $sql = "SELECT DATE_FORMAT(o.date_added,'%Y-%m') AS p, COUNT(*) AS orders, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE_FORMAT(o.date_added,'%Y-%m') ORDER BY p";
        } else { // year
            $sql = "SELECT DATE_FORMAT(o.date_added,'%Y') AS p, COUNT(*) AS orders, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE_FORMAT(o.date_added,'%Y') ORDER BY p";
        }
        $rows = $this->db->query($sql)->rows;
        foreach ($rows as $r) {
            $k = $r['p'];
            if (!isset($period[$k])) $period[$k] = ['orders' => 0, 'total' => 0.0];
            $period[$k]['orders'] = (int)$r['orders'];
            $period[$k]['total'] = (float)$r['total'];
        }

        $currency_code = $this->config->get('config_currency');
        $data['rows'] = [];
        foreach ($period as $k => $v) {
            $label = $k;
            if ($interval === 'day') $label = $k; // YYYY-MM-DD
            if ($interval === 'month') $label = $k; // YYYY-MM
            if ($interval === 'year') $label = $k; // YYYY
            $data['rows'][] = [
                'label' => $label,
                'orders' => $v['orders'],
                'total' => $this->currency->format($v['total'], $currency_code)
            ];
        }

        // Links
        $qs = 'user_token=' . $this->session->data['user_token'] . '&date_start=' . urlencode($date_start) . '&date_end=' . urlencode($date_end) . '&interval=' . $interval;
        $data['export_csv_url'] = $this->url->link('report/sales|exportCsv', $qs);
        $data['export_xls_url'] = $this->url->link('report/sales|exportXls', $qs);
        $data['back_url'] = $this->url->link('report/sales', 'user_token=' . $this->session->data['user_token'] . '&date_start=' . urlencode($date_start) . '&date_end=' . urlencode($date_end));

        // Common layout
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('report/sales', 'user_token=' . $this->session->data['user_token'])
        ];
        $this->response->setOutput($this->load->view('report/sales_details', $data));
    }

    /**
     * Details page: Top payment methods within selected range (no interval selector)
     */
    public function detailsPayments(): void {
        $this->load->language('report/sales');

        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));

        $data['date_start'] = $date_start;
        $data['date_end'] = $date_end;

        // Query aggregated by normalized payment method name
        $prefix = DB_PREFIX;
        $sql = "SELECT
                    CASE
                        WHEN JSON_VALID(o.payment_method) THEN JSON_UNQUOTE(JSON_EXTRACT(o.payment_method, '$.name'))
                        ELSE o.payment_method
                    END AS name,
                    COUNT(*) AS orders,
                    SUM(o.total) AS total
                FROM `{$prefix}order` o
                WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "'
                  AND o.order_status_id > 0
                GROUP BY name
                ORDER BY total DESC";

        $rows = $this->db->query($sql)->rows;

        $currency_code = $this->config->get('config_currency');
        $data['rows'] = [];
        foreach ($rows as $r) {
            $label = ($r['name'] ?? '') !== '' ? $r['name'] : 'Unknown';
            $data['rows'][] = [
                'label'  => $label,
                'orders' => (int)$r['orders'],
                'total'  => $this->currency->format((float)$r['total'], $currency_code)
            ];
        }

        // Column titles (reuse existing keys where possible)
        $data['column_interval'] = $this->language->get('column_payment_method') ?? 'Payment Method';
        $data['column_orders'] = $this->language->get('column_orders') ?? 'Orders';
        $data['column_total'] = $this->language->get('column_total') ?? 'Total';

        // Links
        $qs = 'user_token=' . $this->session->data['user_token'] . '&date_start=' . urlencode($date_start) . '&date_end=' . urlencode($date_end);
        $data['export_csv_url'] = $this->url->link('report/sales|exportPaymentsCsv', $qs);
        $data['export_xls_url'] = $this->url->link('report/sales|exportPaymentsXls', $qs);
        $data['back_url'] = $this->url->link('report/sales', 'user_token=' . $this->session->data['user_token'] . '&date_start=' . urlencode($date_start) . '&date_end=' . urlencode($date_end));

        // Common layout
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('report/sales', 'user_token=' . $this->session->data['user_token'])
        ];

        $this->response->setOutput($this->load->view('report/sales_payments_details', $data));
    }

    /** Export CSV for payment methods details */
    public function exportPaymentsCsv(): void { $this->exportPaymentsCommon('csv'); }
    /** Export XLS (TSV) for payment methods details */
    public function exportPaymentsXls(): void { $this->exportPaymentsCommon('xls'); }

    protected function exportPaymentsCommon(string $type): void {
        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));

        $prefix = DB_PREFIX;
        $sql = "SELECT
                    CASE
                        WHEN JSON_VALID(o.payment_method) THEN JSON_UNQUOTE(JSON_EXTRACT(o.payment_method, '$.name'))
                        ELSE o.payment_method
                    END AS name,
                    COUNT(*) AS orders,
                    SUM(o.total) AS total
                FROM `{$prefix}order` o
                WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "'
                  AND o.order_status_id > 0
                GROUP BY name
                ORDER BY total DESC";
        $rows = $this->db->query($sql)->rows;

        $currency_code = $this->config->get('config_currency');
        $filename = 'sales_payments_' . $date_start . '_' . $date_end . '.' . ($type === 'csv' ? 'csv' : 'xls');
        if ($type === 'csv') {
            $this->response->addHeader('Content-Type: text/csv; charset=UTF-8');
        } else {
            $this->response->addHeader('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        }
        $this->response->addHeader('Content-Disposition: attachment; filename=' . $filename);

        $out = fopen('php://temp', 'w+');
        // header row
        fputcsv($out, ['Payment Method', 'Orders', 'Total']);
        foreach ($rows as $r) {
            $label = ($r['name'] ?? '') !== '' ? $r['name'] : 'Unknown';
            $orders = (int)$r['orders'];
            $total = $this->currency->format((float)$r['total'], $currency_code);
            $line = [$label, $orders, $total];
            if ($type === 'csv') {
                fputcsv($out, $line);
            } else {
                fwrite($out, implode("\t", $line) . "\r\n");
            }
        }
        rewind($out);
        $this->response->setOutput(stream_get_contents($out));
        fclose($out);
    }

    /** Export CSV for details table */
    public function exportCsv(): void {
        $this->exportCommon('csv');
    }

    /** Export XLS (TSV with Excel mime) for details table */
    public function exportXls(): void {
        $this->exportCommon('xls');
    }

    protected function exportCommon(string $type): void {
        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));
        $interval = strtolower($this->request->get['interval'] ?? 'day');
        if (!in_array($interval, ['day', 'month', 'year'], true)) $interval = 'day';

        // Build empty period map depending on interval
        $period = [];
        $start = strtotime($date_start);
        $end = strtotime($date_end);
        $fmt = 'Y-m-d';
        $step = '+1 day';
        if ($interval === 'month') { $fmt = 'Y-m'; $step = '+1 month'; }
        if ($interval === 'year') { $fmt = 'Y'; $step = '+1 year'; }
        $cursor = strtotime(date($fmt, $start) . ( $interval==='day' ? '' : '-01' ));
        while ($cursor <= $end) {
            $key = date($fmt, $cursor);
            $period[$key] = ['orders' => 0, 'total' => 0.0];
            $cursor = strtotime($step, $cursor);
        }

        // Query according to interval
        $prefix = DB_PREFIX;
        if ($interval === 'day') {
            $sql = "SELECT DATE(o.date_added) AS p, COUNT(*) AS orders, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE(o.date_added) ORDER BY p";
        } elseif ($interval === 'month') {
            $sql = "SELECT DATE_FORMAT(o.date_added,'%Y-%m') AS p, COUNT(*) AS orders, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE_FORMAT(o.date_added,'%Y-%m') ORDER BY p";
        } else {
            $sql = "SELECT DATE_FORMAT(o.date_added,'%Y') AS p, COUNT(*) AS orders, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE_FORMAT(o.date_added,'%Y') ORDER BY p";
        }
        $rows = $this->db->query($sql)->rows;
        foreach ($rows as $r) {
            $k = $r['p'];
            if (!isset($period[$k])) $period[$k] = ['orders' => 0, 'total' => 0.0];
            $period[$k]['orders'] = (int)$r['orders'];
            $period[$k]['total'] = (float)$r['total'];
        }

        $currency_code = $this->config->get('config_currency');
        $filename = 'sales_' . $interval . '_' . $date_start . '_' . $date_end . '.' . ($type === 'csv' ? 'csv' : 'xls');
        if ($type === 'csv') {
            $this->response->addHeader('Content-Type: text/csv; charset=UTF-8');
        } else {
            $this->response->addHeader('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        }
        $this->response->addHeader('Content-Disposition: attachment; filename=' . $filename);

        $out = fopen('php://temp', 'w+');
        // header row
        fputcsv($out, ['Interval', 'Orders', 'Total']);
        foreach ($period as $k => $v) {
            $label = $k;
            $orders = $v['orders'];
            $total = $this->currency->format($v['total'], $currency_code);
            $line = [$label, $orders, $total];
            if ($type === 'csv') {
                fputcsv($out, $line);
            } else {
                fwrite($out, implode("\t", $line) . "\r\n");
            }
        }
        rewind($out);
        $this->response->setOutput(stream_get_contents($out));
        fclose($out);
    }

    /**
     * JSON dataset for the sales chart
     */
    public function chart(): void {
        $this->load->language('report/sales');

        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));

        // Build a date map
        $period = [];
        $cursor = strtotime($date_start);
        $end = strtotime($date_end);
        while ($cursor <= $end) {
            $key = date('Y-m-d', $cursor);
            $period[$key] = 0.0;
            $cursor = strtotime('+1 day', $cursor);
        }

        // Query revenue by day
        $prefix = DB_PREFIX;
        $sql = "SELECT DATE(o.date_added) AS d, SUM(o.total) AS revenue FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY DATE(o.date_added) ORDER BY d";
        $query = $this->db->query($sql);
        foreach ($query->rows as $row) {
            $d = $row['d'];
            $period[$d] = (float)$row['revenue'];
        }

        $labels = [];
        $series = [];
        foreach ($period as $d => $val) {
            $labels[] = date('M d', strtotime($d));
            $series[] = round($val, 2);
        }

        $json = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => $this->language->get('text_total_sales'),
                    'data' => $series,
                    'borderColor' => '#4e73df',
                    'backgroundColor' => 'rgba(78, 115, 223, 0.1)',
                    'tension' => 0.3,
                    'fill' => true
                ]
            ]
        ];

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Refunds over time (sum of negative order_total values) JSON
     */
    public function refundsChart(): void {
        $this->load->language('report/sales');
        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));

        // Build date map
        $period = [];
        $cursor = strtotime($date_start);
        $end = strtotime($date_end);
        while ($cursor <= $end) {
            $key = date('Y-m-d', $cursor);
            $period[$key] = 0.0;
            $cursor = strtotime('+1 day', $cursor);
        }

        $prefix = DB_PREFIX;
        // Aggregate refunds by order's modified date, summing order totals for orders that have a return
        $sql = "SELECT DATE(o.date_modified) AS d, SUM(o.total) AS refund
                FROM `{$prefix}return` r
                JOIN `{$prefix}order` o ON o.order_id = r.order_id
                WHERE DATE(o.date_modified) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "'
                GROUP BY DATE(o.date_modified)
                ORDER BY d";
        $query = $this->db->query($sql);
        foreach ($query->rows as $row) {
            $period[$row['d']] = (float)$row['refund'];
        }

        // Calculate total refund for selected range
        $total_refund = array_sum($period);
        $currency_code = $this->config->get('config_currency');
        $total_refund_formatted = $this->currency->format($total_refund, $currency_code);

        // Calculate overall total refund in database
        $overall_sql = "SELECT GROUP_CONCAT(order_id) AS order_ids FROM `{$prefix}return`";
        $overall_query = $this->db->query($overall_sql);
        $overall_order_ids = $overall_query->row['order_ids'] ? explode(',', $overall_query->row['order_ids']) : [];
        $overall_total_refund = 0.0;
        if ($overall_order_ids) {
            $overall_order_id_list = implode(',', array_map('intval', $overall_order_ids));
            $overall_order_sql = "SELECT SUM(total) AS refund FROM `{$prefix}order` WHERE order_id IN ($overall_order_id_list)";
            $overall_order_query = $this->db->query($overall_order_sql);
            $overall_total_refund = (float)($overall_order_query->row['refund'] ?? 0.0);
        }
        $refund_percent = $overall_total_refund > 0 ? round(($total_refund / $overall_total_refund) * 100) : 0;

        $labels = [];
        $series = [];
        foreach ($period as $d => $v) {
            $labels[] = date('M d', strtotime($d));
            $series[] = round($v, 2);
        }

        $json = [
            'labels' => $labels,
            'datasets' => [[
                'label' => $this->language->get('text_refunds'),
                'data' => $series,
                'borderColor' => '#20c997',
                'backgroundColor' => 'rgba(32, 201, 151, 0.1)',
                'tension' => 0.3,
                'fill' => true
            ]],
            'total_refund_formatted' => $total_refund_formatted,
            'refund_percent' => $refund_percent
        ];

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Top payment methods by revenue within range
     */
    public function topPayments(): void {
        $date_end = $this->request->get['date_end'] ?? date('Y-m-d');
        $date_start = $this->request->get['date_start'] ?? date('Y-m-d', strtotime('-29 days', strtotime($date_end)));

        $prefix = DB_PREFIX;
        // Some installations store payment_method as JSON like {"code":"cod.cod","name":"Cash On Delivery"}.
        // Normalize to the human-readable name and group by it to avoid duplicates.
        $sql = "SELECT
                    CASE
                        WHEN JSON_VALID(o.payment_method) THEN JSON_UNQUOTE(JSON_EXTRACT(o.payment_method, '$.name'))
                        ELSE o.payment_method
                    END AS name,
                    SUM(o.total) AS total
                FROM `{$prefix}order` o
                WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "'
                  AND o.order_status_id > 0
                GROUP BY name
                ORDER BY total DESC
                LIMIT 10";
        $rows = $this->db->query($sql)->rows;

        // Format currency in controller for consistency
        $currency_code = $this->config->get('config_currency');
        $list = [];
        foreach ($rows as $r) {
            $list[] = [
                'name' => ($r['name'] ?? '') !== '' ? $r['name'] : 'Unknown',
                'total' => (float)$r['total'],
                'total_formatted' => $this->currency->format((float)$r['total'], $currency_code)
            ];
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($list));
    }
}
