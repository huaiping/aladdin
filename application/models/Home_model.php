<?php
class Home_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*首页 - 最新信息*/
    public function get_latest($id = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get_where('swan_news', array('status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 教师专栏*/
    public function get_teachers()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get_where('swan_news', array('category' => 'teachers', 'status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 学生专栏*/
    public function get_students()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get_where('swan_news', array('category' => 'students', 'status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 家长专栏*/
    public function get_parents()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get_where('swan_news', array('category' => 'parents', 'status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 通知公告*/
    public function get_notices()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get_where('swan_news', array('category' => 'notices', 'status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 校园新闻*/
    public function get_reports()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get_where('swan_news', array('category' => 'reports', 'status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 视频点播*/
    public function get_video()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get_where('swan_video', array('status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 精彩图片展*/
    public function get_slides()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get_where('swan_photo', array('status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 最新资源*/
    public function get_download()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get_where('swan_download', array('status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 教学教研*/
    public function get_teaching()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get_where('swan_news', array('category' => 'teaching', 'status' => 'passed'));
        return $query->result_array();
    }

    /*首页 - 友情链接*/
    public function get_friendsites()
    {
        $query = $this->db->get_where('swan_links', array('status' => 'passed'));
        return $query->result_array();
    }

}
