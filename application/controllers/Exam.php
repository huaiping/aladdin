<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('exam_model');
    }

    public function index()
    {
        $data['choices'] = $this->exam_model->get_choices();
        $this->load->view('header');
        $this->load->view('exam', $data);
        $this->load->view('footer');
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
