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
        $now = date("Y-m-d H:i:s");
        $deadline = "2018-12-16 00:00:00";
        $data['status'] = (strtotime($now) < strtotime($deadline)) ? 'enabled' : 'disabled';
        $this->load->view('header');
        $this->load->view('course', $data);
        $this->load->view('footer');
    }

    public function signup()
    {
        if ($this->is_login())
        {
            $xh = $this->session->userdata('username');
            $xm = $this->session->userdata('name');
            $result = $this->course_model->get_status($xh, $xm);
            $data['status'] = empty($result) ? 'enabled' : 'disabled';
            $data['numbers'] = $this->db->count_all('swan_course');
            $this->load->view('header');
            $this->load->view('course_signup', $data);
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
            //$this->session->sess_destroy();
            redirect('course/success');
        }
        else
        {
            redirect('membership');
        }
    }

    public function success()
    {
        $data['status'] = $this->session->userdata('username');
        $data['statistics'] = $this->course_model->get_statistics();
        $data['subjects'] = $this->course_model->get_subjects();
        $this->load->view('header');
        $this->load->view('course_success', $data);
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
