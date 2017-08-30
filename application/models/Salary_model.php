<?php
class Salary_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_salary($data)
    {
        $this->db->order_by('timestamp', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get_where('swan_salary', array('bh' => $data['bh']));
        return $query->row_array();
    }

}
