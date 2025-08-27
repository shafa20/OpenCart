<?php
namespace Opencart\Admin\Model\Report;

class Sales extends \Opencart\System\Engine\Model {
    public function getTotalSales(array $data = []): float {
        $sql = "SELECT SUM(total) as total FROM `" . DB_PREFIX . "order` WHERE order_status_id > 0";

        if (!empty($data['date_start'])) {
            $sql .= " AND DATE(date_added) >= '" . $this->db->escape($data['date_start']) . "'";
        }

        if (!empty($data['date_end'])) {
            $sql .= " AND DATE(date_added) <= '" . $this->db->escape($data['date_end']) . "'";
        }

        $query = $this->db->query($sql);

        return (float)$query->row['total'];
    }

    public function getOrdersOverTime(array $data = []): array {
        $sql = "SELECT DATE(date_added) as date, SUM(total) as total 
                FROM `" . DB_PREFIX . "order` 
                WHERE order_status_id > 0";

        if (!empty($data['date_start'])) {
            $sql .= " AND DATE(date_added) >= '" . $this->db->escape($data['date_start']) . "'";
        }

        if (!empty($data['date_end'])) {
            $sql .= " AND DATE(date_added) <= '" . $this->db->escape($data['date_end']) . "'";
        }

        $sql .= " GROUP BY DATE(date_added) ORDER BY date ASC";

        $query = $this->db->query($sql);

        return $query->rows;
    }
}
