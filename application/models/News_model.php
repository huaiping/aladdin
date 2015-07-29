<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

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

    /*新闻中心 - 视频点播*/
    public function get_video($id = FALSE)
    {
        if ($id === FALSE)
        {
            $this->db->order_by('pubtime', 'DESC');
            $this->db->limit(10);
            $query = $this->db->get('swan_video');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_video', array('id' => $id));
        return $query->row_array();
    }

    /*新闻中心 - 最新资源*/
    public function get_download($id = FALSE)
    {
        if ($id === FALSE)
        {
            $this->db->order_by('pubtime', 'DESC');
            $this->db->limit(12);
            $query = $this->db->get('swan_download');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_download', array('id' => $id));
        return $query->row_array();
    }

    /*新闻中心 - 友情链接*/
    public function get_friendsites($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('swan_links');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_links', array('id' => $id));
        return $query->row_array();
    }

    /*新闻中心 - 评论*/
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
    public function commentPost($content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        if ($content === FALSE || $username === FALSE)
        {
            //$query = $this->db->get('swan_news');
            //return $query->result_array();
        }
        $data = array(
            'title' => $this->session->userdata('news_id'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'draft'
        );
        $this->db->insert('swan_comment', $data);
    }

}
