<?php
class Score_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_items($data)
    {
        if (strstr($data['category'],"|")) {
            $categories = explode("|", $data['category']);
            $this->db->where_in('item', $categories);
        }
        else
        {
            $this->db->where('item', $data['category']);
        }

        if (strlen($data['number']) == 6)
        {
            $this->db->where(array('xm' => $data['name'], 'xh' => $data['number']));
        }
        else if (strlen($data['number']) == 18)
        {
            $this->db->where(array('xm' => $data['name'], 'sfzh' => $data['number']));
        }
        else
        {
            $this->db->where(array('xm' => $data['name'], 'bj' => $data['number']));
        }
        //$this->db->where(array('item' => $category, 'xm' => $name, 'xh' => $number));
        $query = $this->db->get('swan_score');
        return $query->row_array();
    }

    public function get_total($data)
    {
        $this->db->where(array('item' => $data['number']));
        $query = $this->db->get('swan_score');
        return $query->num_rows();
    }

    public function get_scores($data)
    {

        if (strlen($data['number']) == 18)
        {
            $this->db->where(array('xm' => $data['name'], 'sfzh' => $data['number']));
            $query = $this->db->get('swan_score');
            return $query->result_array();
        }
        else
        {

        }
        //$this->db->where(array('xm' => $name, 'xh' => $number));
        //$query = $this->db->get('swan_score');
        //return $query->row_array();
    }

}
