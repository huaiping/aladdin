<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
        $this->load->model('guestbook_model');
    }

	public function index()
	{
		$this->load->library('pagination');
		$config['base_url'] = site_url('/guestbook/page/');
		$config['total_rows'] = $this->db->count_all('swan_guestbook');
		$config['per_page'] = 10;
		$config['use_page_numbers'] = TRUE;
		$config['display_pages'] = FALSE;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li>';
		$config['cur_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['first_link'] = '首页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';
		$config['last_link'] = '末页';
		$this->pagination->initialize($config);
		$data['guestbook_page'] = $this->pagination->create_links();

		$data['message'] = $this->guestbook_model->get_messages($config['per_page'], 0);
		$this->load->view('header');
		$this->load->view('guestbook', $data);
		$this->load->view('footer');
	}

	public function page($id = FALSE)
    {
		$this->load->library('pagination');
		$config['base_url'] = site_url('/guestbook/page/');
		$config['total_rows'] = $this->db->count_all('swan_guestbook');
		$config['per_page'] = 10;
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
		$data['guestbook_page'] = $this->pagination->create_links();

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 1;
		$offset = ($page-1) * $config['per_page'];
		$data['message'] = $this->guestbook_model->get_messages($config['per_page'], $offset);
		$this->load->view('header');
		$this->load->view('guestbook', $data);
		$this->load->view('footer');
	}

	public function view($id = FALSE)
    {
        $data['message'] = $this->guestbook_model->get_messages($id);
		$this->load->view('header');
		$this->load->view('guestbook', $data);
		$this->load->view('footer');
    }

}
