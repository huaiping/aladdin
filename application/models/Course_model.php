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
        return $query->result_array();
    }

    /*选课报名 - 单科统计*/
    public function get_subjects()
    {
        $query = $this->db->query("select sum(case when wl <> '' then 1 else 0 end) as wl, sum(case when hx <> '' then 1 else 0 end) as hx, sum(case when sw <> '' then 1 else 0 end) as sw, sum(case when zz <> '' then 1 else 0 end) as zz, sum(case when ls <> '' then 1 else 0 end) as ls, sum(case when dl <> '' then 1 else 0 end) as dl from swan_course");
        return $query->result_array();
    }

}
