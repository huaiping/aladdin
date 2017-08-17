<?php
class Exam_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*在线考试 - 单项选择*/
    public function get_choices()
    {
        //$this->db->order_by('hits', 'DESC');
        $this->db->limit(15);
        //$query = $this->db->get_where('swan_exam', array('status' => 'passed'));
        $query = $this->db->get_where('swan_exam', array('pattern' => 'choice'));
        return $query->result_array();
    }

}
