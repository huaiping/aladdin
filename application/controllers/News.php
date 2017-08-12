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

    public function page($id = FALSE)
    {
        $this->load->library('pagination');
        $config['base_url'] = site_url('/news/page/');
        $config['total_rows'] = $this->db->count_all('swan_news');
        $config['per_page'] = 20;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['display_pages'] = FALSE;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_link'] = '首页';
        $config['prev_link'] = '上一页';
        $config['next_link'] = '下一页';
        $config['last_link'] = '末页';
        $this->pagination->initialize($config);
        $data['news_page'] = $this->pagination->create_links();
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
        $offset = ($page-1) * $config['per_page'];
        $data['news'] = $this->news_model->get_newslist($config['per_page'], $offset);
        $this->load->view('header');
        $this->load->view('news_pages', $data);
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
                'avatar' => 'avatar1.jpg',
                'pubtime' => $now,
                'status' => 'pending'
            );
            $data = $this->security->xss_clean($data);
            $data['news_comment'] = $this->news_model->commentPost($data);
        }
        else
        {
            //$this->session->set_userdata('goto', 'news/view/'.$this->uri->segment(3,1));
            redirect('membership');
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
