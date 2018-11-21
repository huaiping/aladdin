<?php
class Course_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*选课报名*/
    public function coursePost($data)
    {
        $this->db->insert('swan_course', $data);
    }

    /*选课状态*/
    public function get_status($xh = FALSE, $xm = FALSE)
    {
        $query = $this->db->get_where('swan_course', array('xh' => $xh, 'xm' => $xm));
        return $query->row_array();
    }

}
