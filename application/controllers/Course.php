<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('course_model');
    }

    public function index()
    {
        if ($this->is_login())
        {
            $this->load->view('header');
            $this->load->view('course');
            $this->load->view('footer');
        }
        else
        {
            $this->session->set_userdata('goto', $this->uri->uri_string());
            redirect('membership');
        }
    }

    public function post()
    {
        if ($this->is_login())
        {
            $now = date("Y-m-d H:i:s");
            $data = array(
                array(
                    'xm' => $this->input->post('name'),
                    'timestamp' => $now
                )
            );
            $data = $this->security->xss_clean($data);
            $this->courses_model->coursePost($data);
            redirect('membership/plaza');
        }
        else
        {
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
