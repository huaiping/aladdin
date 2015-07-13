<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
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
            redirect('survey');
        }
		else
		{
			$this->load->view('header');
			//$this->load->view('login');
			$this->load->view('survey');
			$this->load->view('footer');
        }
	}

	public function login()
	{
		$this->load->model('membership_model');
		$username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
        }
		else
		{
            //$this->session->set_userdata($newdata);
            //$this->db->insert('swan_membership', $data);
			$data = $this->membership_model->userLogin($username, $password);
			if (!empty($data['username']))
			{
				$this->session->set_userdata($data);
				redirect('membership/plaza');
			}
			else
			{
				$this->load->view('header');
				$this->load->view('login');
				$this->load->view('footer');
			}
            //$this->load->view('users', $data);
		}
    }

	public function plaza()
	{
		//$this->load->view('header');
		$this->load->view('plaza');
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

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
        redirect('news', 'Location');
	}

}
