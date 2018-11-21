<?php
class Course_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*选课报名 - 数据提交*/
    public function coursePost($data)
    {
        $this->db->insert('swan_course', $data);
    }

    /*选课报名 - 选课状态*/
    public function get_status($xh = FALSE, $xm = FALSE)
    {
        $query = $this->db->get_where('swan_course', array('xh' => $xh, 'xm' => $xm));
        return $query->row_array();
    }

    /*选课报名 - 数据统计*/
    public function get_statistics()
    {
        $query = $this->db->query("select count(id) as numbers, courses from swan_course group by courses");
        $hx = $this->db->query("select count(id) as hx from swan_course group by hx");
        $sw = $this->db->query("select count(id) as sw from swan_course group by sw");
        $zz = $this->db->query("select count(id) as zz from swan_course group by zz");
        $ls = $this->db->query("select count(id) as ls from swan_course group by ls");
        $dl = $this->db->query("select count(id) as dl from swan_course group by dl");
        return $query->result_array();
    }

    /*选课报名 - 单科统计*/
    public function get_subjects()
    {
        $query = $this->db->query("select count(wl) as wl, count(hx) as hx, count(sw) as sw, count(zz) as zz, count(ls) as ls, count(dl) as dl from swan_course");
        return $query->result_array();
    }

}
