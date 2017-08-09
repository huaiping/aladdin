<?php
class Home_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*首页 - 校园新闻*/
    public function get_reports()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get('swan_news');
        $query = $this->db->get_where('swan_news', array('category' => '校园新闻'));
        return $query->result_array();
    }

    /*首页 - 校园新闻 新闻中心 - 新闻项*/
    public function get_news($id = FALSE)
    {
        if ($id === FALSE)
        {
            $this->db->order_by('pubtime', 'DESC');
            $this->db->limit(10);
            $query = $this->db->get('swan_news');
            return $query->result_array();
        }
        /*计数器*/
        $this->db->where(array('id' => $id));
        $this->db->set('hits','hits + 1',FALSE);
        $this->db->update('swan_news');

        $query = $this->db->get_where('swan_news', array('id' => $id));
        return $query->row_array();
    }

    /*首页 - 视频点播*/
    public function get_video()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get('swan_video');
        return $query->result_array();
    }

    /*首页 - 最新资源*/
    public function get_download()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(12);
        $query = $this->db->get('swan_download');
        return $query->result_array();
    }

    /*首页 - 友情链接*/
    public function get_friendsites()
    {
        $query = $this->db->get('swan_links');
        return $query->result_array();
    }

    /*新闻中心 - 评论列表*/
    public function get_comment($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('swan_comment');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_comment', array('title' => $id));
        return $query->result_array();
    }

    /*新闻中心 - 文章评论*/
    public function commentPost($data)
    {
        $this->db->insert('swan_comment', $data);
    }

}
