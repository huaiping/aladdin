<?php
class Membership_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*用户中心 - 登录*/
    public function userLogin($data)
    {
        $query = $this->db->get_where('swan_membership', $data);
        return $query->row_array();
    }

    /*用户中心 - 注册*/
    public function register($data)
    {
        $this->db->insert('swan_membership', $data);
    }

    /*用户中心 - 投稿*/
    public function articlePost($data)
    {
        $this->db->insert('swan_news', $data);
    }

    /*用户中心 - 文件*/
    public function filesPost($data)
    {
        $this->db->insert('swan_download', $data);
    }

    /*用户中心 - 留言*/
    public function messagePost($data)
    {
        $this->db->insert('swan_guestbook', $data);
    }

    /*用户中心 - 视频*/
    public function videoPost($data)
    {
        $this->db->insert('swan_video', $data);
    }

    /*用户中心 - 链接*/
    public function linkPost($data)
    {
        $this->db->insert('swan_links', $data);
    }

    /*用户中心 - 我的投稿*/
    public function get_articles($username = FALSE)
    {
        $username = $this->session->userdata('username');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_news', array('author' => $username));
        return $query->result_array();
    }

    /*用户中心 - 我的相册*/
    public function get_albums($username = FALSE)
    {
        $username = $this->session->userdata('username');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_photo', array('author' => $username));
        return $query->result_array();
    }

    /*用户中心 - 我的文件*/
    public function get_files($username = FALSE)
    {
        $username = $this->session->userdata('username');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_download', array('author' => $username));
        return $query->result_array();
    }

    /*用户中心 - 我的留言*/
    public function get_messages($username = FALSE)
    {
        $username = $this->session->userdata('username');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_guestbook', array('author' => $username));
        return $query->result_array();
    }

    /*用户中心 - 我的视频*/
    public function get_videos($username = FALSE)
    {
        $username = $this->session->userdata('username');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_video', array('author' => $username));
        return $query->result_array();
    }

    /*用户中心 - 我的链接*/
    public function get_links($username = FALSE)
    {
        $username = $this->session->userdata('username');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_links', array('author' => $username));
        return $query->result_array();
    }

}
