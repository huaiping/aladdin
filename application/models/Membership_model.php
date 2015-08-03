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
        $query = $this->db->get_where('swan_membership', array('username' => $username, 'password' => $password));
        return $query->row_array();
    }

    public function articlePost($title = FALSE, $category = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        if ($title === FALSE || $content === FALSE || $username === FALSE)
        {
            //$query = $this->db->get('swan_news');
            //return $query->result_array();
        }
        else
        {
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
    }

    public function filesPost($title = FALSE, $category = FALSE, $url = FALSE, $content = FALSE, $license = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        if ($title === FALSE || $url === FALSE || $username === FALSE)
        {
            //$query = $this->db->get('swan_news');
            //return $query->result_array();
        }
        else
        {
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
    }

    public function messagePost($title = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        if ($title === FALSE || $content === FALSE || $username === FALSE)
        {
            //$query = $this->db->get('swan_news');
            //return $query->result_array();
        }
        else
        {
            $data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content'),
                'author' => $this->input->post('username'),
                'pubtime' => $now,
                'status' => 'draft'
            );
            $this->db->insert('swan_guestbook', $data);
        }
    }

}
