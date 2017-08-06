<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('news_model');
    }

    public function index()
    {
        $data['news'] = $this->news_model->get_newslist();
        $this->load->view('header');
        $this->load->view('news_lists', $data);
        $this->load->view('footer');
    }

    public function view($id = FALSE)
    {
        $this->session->set_userdata('goto', $this->uri->uri_string());
        $id = ($id === FALSE) ? 1 : $id;
        $this->session->set_userdata('news_id', $this->uri->segment(3, 1));
        $data['news_item'] = $this->news_model->get_news($id);
        $data['news_comment'] = $this->news_model->get_comment($id);
        $this->load->view('header');
        $this->load->view('news_items', $data);
        $this->load->view('footer');
    }

    public function comment()
    {
        if ($this->is_login())
        {
            $now = date("Y-m-d H:i:s");
            $data = array(
                'title' => $this->session->userdata('news_id'),
                'content' => $this->input->post('content'),
                'author' => $this->input->post('username'),
                'pubtime' => $now,
                'status' => 'queue'
            );
            $data = $this->security->xss_clean($data);
            $data['news_comment'] = $this->news_model->commentPost($data);
        }
        else
        {
            //$this->session->set_userdata('goto', 'news/view/'.$this->uri->segment(3,1));
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function is_login()
    {
        $status = $this->session->userdata('username');
        if ($status)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}
