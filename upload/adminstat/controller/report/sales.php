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

        // Include scripts (Chart.js vendor + page script)
        $this->document->addScript('view/javascript/vendor/chart.umd.min.js');
        $this->document->addScript('view/javascript/report/sales.js');

        // Common layout
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->load->model('report/sales');

       
        
        $this->response->setOutput($this->load->view('report/sales', $data));
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
        // Using order_total table; refunds assumed as negative totals (credit/adjustments)
        $sql = "SELECT DATE(o.date_added) AS d, SUM(ot.value) AS refund FROM `{$prefix}order` o JOIN `{$prefix}order_total` ot ON o.order_id = ot.order_id WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 AND ot.value < 0 GROUP BY DATE(o.date_added) ORDER BY d";
        $query = $this->db->query($sql);
        foreach ($query->rows as $row) {
            $period[$row['d']] = abs((float)$row['refund']);
        }

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
            ]]
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
        $sql = "SELECT o.payment_method AS name, SUM(o.total) AS total FROM `{$prefix}order` o WHERE DATE(o.date_added) BETWEEN '" . $this->db->escape($date_start) . "' AND '" . $this->db->escape($date_end) . "' AND o.order_status_id > 0 GROUP BY o.payment_method ORDER BY total DESC LIMIT 10";
        $rows = $this->db->query($sql)->rows;

        // Format currency in controller for consistency
        $currency_code = $this->config->get('config_currency');
        $list = [];
        foreach ($rows as $r) {
            $list[] = [
                'name' => $r['name'] ?: 'Unknown',
                'total' => (float)$r['total'],
                'total_formatted' => $this->currency->format((float)$r['total'], $currency_code)
            ];
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($list));
    }
}
