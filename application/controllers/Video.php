<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
        $this->load->model('video_model');
    }

	public function index($id = FALSE)
	{
		if ($id === FALSE)
		{
			$id = 1;
		}
		$data['hot'] = $this->video_model->get_hots();
		$data['item'] = $this->video_model->get_items($id);
		$this->load->view('header');
		$this->load->view('video', $data);
		$this->load->view('footer');
	}

	public function view($id = FALSE)
    {
		if ($id === FALSE)
		{
			$id = 1;
		}
		$data['hot'] = $this->video_model->get_hots();
        $data['item'] = $this->video_model->get_items($id);
		$this->load->view('header');
		$this->load->view('video', $data);
		$this->load->view('footer');
    }

}
