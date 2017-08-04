<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url', 'security'));
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
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
        else
        {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => md5(sha1($this->input->post('password')))
            );
            $data = $this->security->xss_clean($data);
            $data = $this->membership_model->userLogin($data);
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
        }
    }

    public function plaza()
    {
        $data['articles'] = $this->membership_model->get_articles();
        $data['albums'] = $this->membership_model->get_albums();
        $data['files'] = $this->membership_model->get_files();
        $data['messages'] = $this->membership_model->get_messages();
        $data['videos'] = $this->membership_model->get_videos();
        $data['links'] = $this->membership_model->get_links();
        $this->load->view('plaza_header');
        $this->load->view('plaza', $data);
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
            $this->load->view('plaza_header');
            $this->load->view('plaza_album');
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
        $config['allowed_types'] = 'wps|doc|docx|ppt|pptx|zip|rar';
        $config['max_size'] = 10000000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('plaza_header');
            $this->load->view('plaza_files', $error);
            $this->load->view('footer');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $url = $this->upload->data('file_name');
            $this->membership_model->filesPost($title, $category, $url, $username);
            redirect('membership/plaza');
        }
    }

    public function message()
    {
        $this->load->view('plaza_header');
        $this->load->view('plaza_message');
        $this->load->view('footer');
    }

    public function messagePost($title = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'draft'
        );
        $data = $this->security->xss_clean($data);
        $this->membership_model->messagePost($data);
        redirect('membership/plaza');
    }

    public function video()
    {
        if ($this->is_login())
        {
            $this->load->view('plaza_header');
            $this->load->view('plaza_video');
            $this->load->view('footer');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function videoPost($title = FALSE, $category = FALSE, $content = FALSE, $username = FALSE)
    {
        $config['upload_path'] = './webroot/video/';
        $config['allowed_types'] = 'ogg|mp4|webm';
        $config['max_size'] = 10000000;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('plaza_header');
            $this->load->view('plaza_video', $error);
            $this->load->view('footer');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $url = $this->upload->data('file_name');
            $this->membership_model->videoPost($title, $category, $content, $username);
            redirect('membership/plaza');
        }
    }

    public function links()
    {
        if ($this->is_login())
        {
            $this->load->view('plaza_header');
            $this->load->view('plaza_links');
            $this->load->view('footer');
        }
        else
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
    }

    public function linkPost($title = FALSE, $url = FALSE, $content = FALSE)
    {
        $this->membership_model->linkPost($title, $url, $content);
        redirect('membership/plaza');
    }

    public function profile()
    {
        if ($this->is_login())
        {
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
        $this->session->sess_destroy();
        redirect(base_url(), 'Location');
    }
}
