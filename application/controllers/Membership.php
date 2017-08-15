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
                redirect('membership');
            }
        }
    }

    public function register($username = FALSE, $password = FALSE, $name = FALSE, $email = FALSE)
    {
        $now = date("Y-m-d H:i:s");
        $data = array(
            'username' => trim($this->input->post('username')),
            'password' => md5(sha1(trim($this->input->post('password')))),
            'name' => trim($this->input->post('name')),
            'email' => trim($this->input->post('email')),
            'avatar' => 'avatar1.jpg',
            'groups' => 'guests',
            'articles' => '0',
            'albums' => '0',
            'files' => '0',
            'messages' => '1',
            'videos' => '0',
            'links' => '0',
            'pubtime' => $now,
            'beans' => 20,
            'status' => 'pending'
        );
        $data = $this->security->xss_clean($data);
        $this->membership_model->register($data);
        redirect('membership');
    }

    public function plaza()
    {
        $groups = $this->session->userdata('groups');
        if ($groups == 'moderators') {
            $data['articles'] = $this->membership_model->pending_articles();
            $data['albums'] = $this->membership_model->pending_albums();
            $data['files'] = $this->membership_model->pending_files();
            $data['messages'] = $this->membership_model->pending_messages();
            $data['videos'] = $this->membership_model->pending_videos();
            $data['links'] = $this->membership_model->pending_links();
            $this->load->view('plaza_header');
            $this->load->view('plaza_audit', $data);
            $this->load->view('footer');
        } elseif ($groups == 'staffs') {
            $data['articles'] = $this->membership_model->get_articles();
            $data['albums'] = $this->membership_model->get_albums();
            $data['files'] = $this->membership_model->get_files();
            $data['messages'] = $this->membership_model->get_messages();
            $data['videos'] = $this->membership_model->get_videos();
            $data['links'] = $this->membership_model->get_links();
            $this->load->view('plaza_header');
            $this->load->view('plaza', $data);
            $this->load->view('footer');
        } elseif ($groups == 'guests') {
            $this->load->view('plaza_header');
            $this->load->view('plaza_message');
            $this->load->view('footer');
        } else {
            redirect('membership');
        }
    }

    public function article()
    {
        $privilege = $this->session->userdata('articles');
        if ($this->is_login() && $privilege == "1")
        {
            $this->load->view('plaza_header');
            $this->load->view('plaza_article');
            $this->load->view('footer');
        }
        else
        {
            redirect('membership');
        }
    }

    public function articlePost($title = FALSE, $category = FALSE, $summary = FALSE, $content = FALSE, $username = FALSE)
    {
        $privilege = $this->session->userdata('articles');
        if ($this->is_login() && $privilege == "1")
        {
            $now = date("Y-m-d H:i:s");
            $data = array(
                'title' => trim($this->input->post('title')),
                'summary' => trim($this->input->post('summary')),
                'author' => $this->input->post('username'),
                'category' => $this->input->post('category'),
                'pubtime' => $now,
                'modtime' => $now,
                'status' => 'pending'
            );
            $data = $this->security->xss_clean($data);
            $data['content'] = $this->input->post('content');
            $this->membership_model->articlePost($data);
            redirect('membership/plaza');
        }
        else
        {
            redirect('membership');
        }
    }

    public function album()
    {
        $privilege = $this->session->userdata('albums');
        if ($this->is_login() && $privilege == "1")
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


    public function albumPost()
    {
        $privilege = $this->session->userdata('albums');
        if ($this->is_login() && $privilege == "1")
        {
            $config['upload_path'] = './webroot/image/';
            $config['allowed_types'] = 'png|jpg|gif';
            $config['max_size'] = 10000000;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('plaza_header');
                $this->load->view('plaza_album', $error);
                $this->load->view('footer');
            }
            else
            {
                $now = date("Y-m-d H:i:s");
                $data = array(
                    'title' => trim($this->input->post('title')),
                    'description' => trim($this->input->post('content')),
                    'url' => 'webroot/image/'.$this->upload->data('file_name'),
                    'thumbnail' => 'webroot/image/'.$this->upload->data('file_name'),
                    'author' => $this->input->post('username'),
                    'category' => $this->input->post('subject'),
                    'subcategory' => $this->input->post('category'),
                    'pubtime' => $now,
                    'status' => 'pending'
                );
                $data = $this->security->xss_clean($data);
                $this->membership_model->albumPost($data);
                redirect('membership/plaza');
            }
        }
        else
        {
            redirect('membership');
        }
    }

    public function files()
    {
        $privilege = $this->session->userdata('files');
        if ($this->is_login() && $privilege == "1")
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
        $privilege = $this->session->userdata('files');
        if ($this->is_login() && $privilege == "1")
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
                    'title' => trim($this->input->post('title')),
                    'category' => $this->input->post('subject').$this->input->post('category'),
                    'description' => trim($this->input->post('content')),
                    'url' => $this->upload->data('file_name'),
                    'author' => $this->input->post('username'),
                    'pubtime' => $now,
                    'sizes' => ceil($this->upload->data('file_size')),
                    'license' => 'shareware',
                    'stars' => '★★★★★',
                    'status' => 'pending'
                );
                $data = $this->security->xss_clean($data);
                //$data = array('upload_data' => $this->upload->data());
                $this->membership_model->filesPost($data);
                redirect('membership/plaza');
            }
        }
        else
        {
            redirect('membership');
        }
    }

    public function message()
    {
        $privilege = $this->session->userdata('messages');
        if ($this->is_login() && $privilege == "1")
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
        $privilege = $this->session->userdata('messages');
        if ($this->is_login() && $privilege == "1")
        {
            $now = date("Y-m-d H:i:s");
            $data = array(
                'title' => trim($this->input->post('title')),
                'content' => trim($this->input->post('content')),
                'author' => $this->input->post('username'),
                'avatar' => 'avatar1.jpg',
                'pubtime' => $now,
                'reply' => '',
                'modtime' => $now,
                'status' => 'pending'
            );
            $data = $this->security->xss_clean($data);
            $this->membership_model->messagePost($data);
            redirect('membership/plaza');
        }
        else
        {
            redirect('membership');
        }
    }

    public function video()
    {
        $privilege = $this->session->userdata('videos');
        if ($this->is_login() && $privilege == "1")
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
        $privilege = $this->session->userdata('videos');
        if ($this->is_login() && $privilege == "1")
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
                    'title' => trim($this->input->post('title')),
                    'description' => trim($this->input->post('content')),
                    'url' => '/webroot/video/'.$this->upload->data('file_name'),
                    'author' => $this->input->post('username'),
                    'category' => '1',
                    'pubtime' => $now,
                    'status' => 'pending'
                );
                $data = $this->security->xss_clean($data);
                $this->membership_model->videoPost($data);
                redirect('membership/plaza');
            }
        }
        else
        {
            redirect('membership');
        }
    }

    public function links()
    {
        $privilege = $this->session->userdata('links');
        if ($this->is_login() && $privilege == "1")
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
        $privilege = $this->session->userdata('links');
        if ($this->is_login() && $privilege == "1")
        {
            $now = date("Y-m-d H:i:s");
            $data = array(
                'title' => trim($this->input->post('title')),
                'url' => trim($this->input->post('url')),
                'description' => trim($this->input->post('content')),
                'author' => $this->input->post('username'),
                'pubtime' => $now,
                'status' => 'pending'
            );
            $data = $this->security->xss_clean($data);
            $this->membership_model->linkPost($data);
            redirect('membership/plaza');
        }
        else
        {
            redirect('membership');
        }
    }

    public function audit($action = FALSE, $id = FALSE, $status = FALSE)
    {
        $data = array(
            'action' => $this->input->post('action'),
            'id' => $this->input->post('id'),
            'status' => $this->input->post('status')
        );
        $data = $this->security->xss_clean($data);
        print_r($data);
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
