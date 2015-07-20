<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('membership_model');
    }

    public function index()
    {
        if ($this->is_login())
        {
            redirect('membership/plaza');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function login()
    {
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
                $goto = $this->session->userdata('goto');
                $this->session->unset_userdata('goto');
                $this->session->set_userdata($data);
                if (!empty($goto))
                {
                    redirect($goto);
                }
                else
                {
                    redirect('membership/plaza');
                }
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
        $this->load->view('plaza_header');
        $this->load->view('plaza');
        $this->load->view('footer');
    }

    public function article()
    {
        if ($this->is_login())
        {
            //redirect('membership/plaza');
            $this->load->view('plaza_header');
            $this->load->view('plaza_article');
            $this->load->view('footer');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function articlePost($title = FALSE, $category = FALSE, $content = FALSE, $username = FALSE)
    {
        $this->membership_model->articlePost($title, $category, $content, $username);
        redirect('membership/plaza');
    }

    public function album()
    {
        if ($this->is_login())
        {
            //redirect('membership/plaza');
            $this->load->view('plaza_header');
            $this->load->view('plaza');
            $this->load->view('footer');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function files()
    {
        if ($this->is_login())
        {
            //redirect('membership/plaza');
            $this->load->view('plaza_header');
            $this->load->view('plaza_files');
            $this->load->view('footer');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function filesPost($title = FALSE, $category = FALSE, $url = FALSE, $username = FALSE)
    {
        $config['upload_path'] = './webroot/download/';
        $config['allowed_types'] = 'zip|gz|png|gif|jpg';
        $config['max_size'] = 10000000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('plaza_files', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $url = $this->upload->data('file_name');
            $this->membership_model->filesPost($title, $category, $url, $username);
            $this->load->view('plaza_header');
            $this->load->view('plaza_files', $data);
            $this->load->view('footer');
        }
    }

    public function message()
    {
        //$this->load->view('header');
        $this->load->view('plaza_header');
        $this->load->view('plaza_message');
        $this->load->view('footer');
    }

    public function messagePost($title = FALSE, $content = FALSE, $username = FALSE)
    {
        $this->membership_model->messagePost($title, $content, $username);
        redirect('membership/plaza');
    }

    public function video()
    {
        //$this->load->view('header');
        $this->load->view('plaza_header');
        $this->load->view('plaza');
        $this->load->view('footer');
    }

    public function profile()
    {
        //$this->load->view('header');
        $this->load->view('plaza_header');
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
        //$this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('news', 'Location');
    }

}
