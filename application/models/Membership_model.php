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

    /*用户中心 - 投稿*/
    public function articlePost($title = FALSE, $category = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('category'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'draft'
        );
        $this->db->insert('swan_news', $data);
    }

    /*用户中心 - 文件*/
    public function filesPost($title = FALSE, $category = FALSE, $url = FALSE, $content = FALSE, $license = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('subject').$this->input->post('category'),
            'url' => $this->upload->data('file_name'),
            'description' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'sizes' => ceil($this->upload->data('file_size')),
            'license' => '共享版',
            'status' => 'draft'
        );
        $this->db->insert('swan_download', $data);
    }

    /*用户中心 - 留言*/
    public function messagePost($data)
    {
        $this->db->insert('swan_guestbook', $data);
    }

    /*用户中心 - 视频*/
    public function videoPost($title = FALSE, $category = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'url' => '/webroot/video/'.$this->upload->data('file_name'),
            'description' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'draft'
        );
        $this->db->insert('swan_video', $data);
    }

    /*用户中心 - 链接*/
    public function linkPost($title = FALSE, $url = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'description' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'draft'
        );
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
