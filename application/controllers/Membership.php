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

    public function register($username = FALSE, $password = FALSE, $name = FALSE, $email = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5(sha1($this->input->post('password'))),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'levels' => '3',
            'groups' => 'guests',
            'pubtime' => $now,
            'status' => 'pending'
        );
        $data = $this->security->xss_clean($data);
        $this->membership_model->register($data);
        redirect('membership');
    }

    public function plaza()
    {
        $levels = $this->session->userdata('levels');
        if ($levels == 1) {
            $this->load->view('plaza_header');

            $this->load->view('footer');
        } elseif ($levels == 2) {
            $data['articles'] = $this->membership_model->get_articles();
            $data['albums'] = $this->membership_model->get_albums();
            $data['files'] = $this->membership_model->get_files();
            $data['messages'] = $this->membership_model->get_messages();
            $data['videos'] = $this->membership_model->get_videos();
            $data['links'] = $this->membership_model->get_links();
            $this->load->view('plaza_header');
            $this->load->view('plaza', $data);
            $this->load->view('footer');
        } elseif ($levels == 3) {
            $this->load->view('plaza_header');
            $this->load->view('plaza_message');
            $this->load->view('footer');
        } else {
            redirect('membership');
        }
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
            redirect('membership');
        }
    }

    public function articlePost($title = FALSE, $category = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'category' => $this->input->post('category'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'pending'
        );
        $data = $this->security->xss_clean($data);
        $data['content'] = $this->input->post('content');
        $this->membership_model->articlePost($data);
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
            redirect('membership');
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
            redirect('membership');
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
            $now = date("Y-m-d H:i:s");
            $data = array(
                'title' => $this->input->post('title'),
                'category' => $this->input->post('subject').$this->input->post('category'),
                'url' => $this->upload->data('file_name'),
                'description' => $this->input->post('content'),
                'author' => $this->input->post('username'),
                'pubtime' => $now,
                'sizes' => ceil($this->upload->data('file_size')),
                'license' => '共享版',
                'status' => 'pending'
            );
            $data = $this->security->xss_clean($data);
            //$data = array('upload_data' => $this->upload->data());
            $this->membership_model->filesPost($data);
            redirect('membership/plaza');
        }
    }

    public function message()
    {
        if ($this->is_login())
        {
            $this->load->view('plaza_header');
            $this->load->view('plaza_message');
            $this->load->view('footer');
        }
        else
        {
            redirect('membership');
        }
    }

    public function messagePost($title = FALSE, $content = FALSE, $username = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'pending'
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
            redirect('membership');
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
            $now = date("Y-m-d H:i:s");
            $data = array(
                'title' => $this->input->post('title'),
                'url' => '/webroot/video/'.$this->upload->data('file_name'),
                'description' => $this->input->post('content'),
                'author' => $this->input->post('username'),
                'pubtime' => $now,
                'status' => 'pending'
            );
            $data = $this->security->xss_clean($data);
            $this->membership_model->videoPost($data);
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
            redirect('membership');
        }
    }

    public function linkPost($title = FALSE, $url = FALSE, $content = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'description' => $this->input->post('content'),
            'author' => $this->input->post('username'),
            'pubtime' => $now,
            'status' => 'pending'
        );
        $data = $this->security->xss_clean($data);
        $this->membership_model->linkPost($data);
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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url(), 'Location');
    }
}
