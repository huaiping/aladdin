<?php
class Courses_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*选课报名*/
    public function coursesPost($data)
    {
        $this->db->insert_batch('swan_courses', $data);
    }

}
