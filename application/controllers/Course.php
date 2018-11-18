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
                'xh' => $this->input->post('xh'),
                'xm' => $this->input->post('xm'),
                'wl' => $this->input->post('wl'),
                'hx' => $this->input->post('hx'),
                'sw' => $this->input->post('sw'),
                'zz' => $this->input->post('zz'),
                'ls' => $this->input->post('ls'),
                'dl' => $this->input->post('dl'),
                'courses' => $this->input->post('wl').$this->input->post('hx').$this->input->post('sw').$this->input->post('zz').$this->input->post('ls').$this->input->post('dl'),
                'timestamp' => $now,
                'memo' => 'T'
            );
            $data = $this->security->xss_clean($data);
            $this->course_model->coursePost($data);
            redirect('course/success');
        }
        else
        {
            redirect('membership');
        }
    }

    public function success()
    {
        $this->load->view('header');
        $this->load->view('success');
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
