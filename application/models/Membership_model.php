<?php
class Membership_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function userLogin($username = FALSE, $password = FALSE)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username === FALSE || $password === FALSE)
        {
            //$query = $this->db->get('swan_news');
            //return $query->result_array();
        }
        $password = md5(sha1($password));
        $query = $this->db->get_where('swan_membership', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

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
            'license' => '共享版',
            'status' => 'draft'
        );
        $this->db->insert('swan_download', $data);
    }

    public function messagePost($title = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'draft'
        );
        $this->db->insert('swan_guestbook', $data);
    }

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

    /*用户中心 - 我的文章*/
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
        //$this->db->order_by('pubtime', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get_where('swan_links', array('author' => $username));
        return $query->result_array();
    }

}
