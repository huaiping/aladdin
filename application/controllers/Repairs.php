<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repairs extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('repairs_model');
    }

    public function index()
    {
        if ($this->is_login())
        {
            $this->load->view('header');
            $this->load->view('repairs');
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

    public function post()
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'category' => $this->input->post('category'),
            'department' => $this->input->post('department'),
            'item' => $this->input->post('item'),
            'address' => $this->input->post('address'),
            'details' => $this->input->post('details'),
            'customer' => $this->input->post('customer'),
            'telephone' => $this->input->post('telephone'),
            'pubtime' => $now,
            'status' => 'pending',
            'assessment' => ''
        );
        $data = $this->security->xss_clean($data);
        $this->repairs_model->repairsPost($data);
        //redirect('membership/plaza');
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
