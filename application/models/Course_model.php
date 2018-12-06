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

    /*选课报名 - 选课统计表*/
    public function get_charts()
    {
        $sql = "SELECT a.courses,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1801%') c1,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1802%') c2,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1803%') c3,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1804%') c4,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1805%') c5,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1806%') c6,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1807%') c7,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1808%') c8,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1809%') c9,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1810%') c10,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1811%') c11,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1812%') c12,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1813%') c13,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1814%') c14,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1815%') c15,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1816%') c16,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1817%') c17,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1818%') c18,
            (SELECT COUNT(id) FROM swan_course WHERE courses=a.courses AND xh LIKE '1819%') c19
        FROM swan_course a GROUP BY a.courses";
        $query = $this->db->query($sql);
        return $query->result_array();
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
        return $query->row_array();
    }

}
