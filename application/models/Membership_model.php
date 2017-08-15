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

    /*用户中心 - 相册*/
    public function albumPost($data)
    {
        $this->db->insert('swan_photo', $data);
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

    /*用户中心 - 待审投稿*/
    public function pending_articles()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_news', array('status' => 'pending'));
        return $query->result_array();
    }

    /*用户中心 - 待审相册*/
    public function pending_albums($username = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_photo', array('status' => 'pending'));
        return $query->result_array();
    }

    /*用户中心 - 待审文件*/
    public function pending_files($username = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_download', array('status' => 'pending'));
        return $query->result_array();
    }

    /*用户中心 - 待审留言*/
    public function pending_messages($username = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_guestbook', array('status' => 'pending'));
        return $query->result_array();
    }

    /*用户中心 - 待审视频*/
    public function pending_videos($username = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_video', array('status' => 'pending'));
        return $query->result_array();
    }

    /*用户中心 - 待审链接*/
    public function pending_links($username = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_links', array('status' => 'pending'));
        return $query->result_array();
    }

}
