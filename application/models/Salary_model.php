<?php
class Salary_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_salary($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('swan_salary');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_salary', array('bh' => $id));
        return $query->row_array();
    }

}
