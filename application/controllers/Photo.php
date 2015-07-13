<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('photo_model');
    }

    public function index()
    {
        $data['category'] = $this->photo_model->get_category();
        $data['subcategory'] = $this->photo_model->get_subcategory();
        $this->load->view('header');
        $this->load->view('photo_lists', $data);
        $this->load->view('footer');
    }

    public function view($id = FALSE)
    {
        $data['photos'] = $this->photo_model->get_photos($id);
        $this->load->view('header');
        $this->load->view('photo_items', $data);
        $this->load->view('footer');
    }

    public function waterfall($id = FALSE)
    {
        //$data['photos'] = $this->photo_model->get_photos($id);
        $this->load->view('header');
        $this->load->view('photo_waterfall');
        $this->load->view('footer');
    }

    public function loading($id = FALSE)
    {
        $this->output->set_header('Content-Type: application/json; charset=utf-8');
        $data = $this->photo_model->get_waterfall($id);
        echo json_encode($data);
    }
}
