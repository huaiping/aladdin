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
        $data['latests'] = $this->news_model->get_news();
        $data['videos'] = $this->news_model->get_video();
        $data['downloads'] = $this->news_model->get_download();
        $data['friendsites'] = $this->news_model->get_friendsites();
        $this->load->view('header');
        $this->load->view('news_lists', $data);
        $this->load->view('footer');
    }

    public function view($id = FALSE)
    {
        //$this->session->set_userdata('goto', $this->uri->uri_string());
        $id = ($id === FALSE) ? 1 : $id;
        $this->session->set_userdata('news_id', $this->uri->segment(3, 1));
        $data['news_item'] = $this->news_model->get_news($id);
        $this->load->view('header');
        $this->load->view('news_items', $data);
        $this->load->view('footer');
    }

    public function comment()
    {
		if ($this->is_login())
        {
			$data['news_comment'] = $this->news_model->commentPost();
        }
        else
        {
            $this->session->set_userdata('goto', 'news/view/'.$this->uri->segment(3,1));
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
