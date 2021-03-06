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
        if ($this->is_login())
        {
            $data['choices'] = $this->exam_model->get_choices();
            $this->load->view('header');
            $this->load->view('exam', $data);
            $this->load->view('footer');
        }
        else
        {
            $this->session->set_userdata('goto', $this->uri->uri_string());
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
