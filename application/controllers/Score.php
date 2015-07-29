<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Score extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('score_model');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('score');
        $this->load->view('footer');
    }

    public function view()
    {
        $data['category'] = $this->input->post('category', TRUE);
        $data['number'] = $this->input->post('number', TRUE);
        $data['item'] = $this->score_model->get_items();
        $data['scores'] = $this->score_model->get_scores();
        $this->load->view('header');
        $this->load->view('score_detail', $data);
        $this->load->view('footer');
    }
}
