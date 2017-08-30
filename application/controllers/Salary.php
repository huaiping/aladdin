<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if ($this->is_login())
        {
            $data = array(
                'bh' => $this->session->userdata('memo')
                //'xm' => $this->session->userdata('name')
            );
            $data['salary'] = $this->salary_model->get_salary($data);
            $this->load->view('header');
            $this->load->view('salary', $data);
            $this->load->view('footer');
        }
        else
        {
            $this->session->set_userdata('goto', $this->uri->uri_string());
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
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
