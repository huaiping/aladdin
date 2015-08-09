<?php
class Score_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_items()
    {
        $category = $this->input->post('category');
        $name = $this->input->post('name');
        $number = $this->input->post('number');
        if (strstr($category,"|")) {
            $categories = explode("|",$category);
            $this->db->where_in('item', $categories);
        }
        else
        {
            $this->db->where('item', $category);
        }

        if ($category === FALSE || $name === FALSE || $number === FALSE)
        {
            //$query = $this->db->get('swan_video');
            //return $query->result_array();
        }
        if (strlen($number) == 6)
        {
            $this->db->where(array('xm' => $name, 'xh' => $number));
        }
        else if (strlen($number) == 18)
        {
            $this->db->where(array('xm' => $name, 'sfzh' => $number));
        }
        else
        {
            $this->db->where(array('xm' => $name, 'bj' => $number));
        }
        //$this->db->where(array('item' => $category, 'xm' => $name, 'xh' => $number));
        $query = $this->db->get('swan_score');
        return $query->row_array();
    }

    public function get_scores()
    {
        $category = $this->input->post('category');
        $name = $this->input->post('name');
        $number = $this->input->post('number');
        if (strlen($number) == 18)
        {
            $this->db->where(array('xm' => $name, 'sfzh' => $number));
            $query = $this->db->get('swan_score');
            return $query->row_array();
        }
        else
        {

        }
        //$this->db->where(array('xm' => $name, 'xh' => $number));
        //$query = $this->db->get('swan_score');
        //return $query->row_array();
    }

}
