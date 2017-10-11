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
        $id = ($id === FALSE) ? 1 : $id;
        $data['hot'] = $this->video_model->get_hots();
        $data['item'] = $this->video_model->get_items($id);
        $this->load->view('header');
        $this->load->view('video', $data);
        $this->load->view('footer');
    }

    public function view($id = FALSE)
    {
        $id = ($id === FALSE) ? 1 : $id;
        $data['hot'] = $this->video_model->get_hots();
        $data['item'] = $this->video_model->get_items($id);
        $this->load->view('header');
        $this->load->view('video', $data);
        $this->load->view('footer');
    }

    public function preview($id = FALSE)
    {
        $id = ($id === FALSE) ? 1 : $id;
        $data['hot'] = $this->video_model->get_hots();
        $data['item'] = $this->video_model->preview_item($id);
        $this->load->view('header');
        $this->load->view('preview_video', $data);
        $this->load->view('footer');
    }
}
