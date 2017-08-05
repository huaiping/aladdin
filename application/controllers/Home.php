<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('news_model');
    }

    public function index()
    {
        $data['latests'] = $this->news_model->get_news();
        $data['videos'] = $this->news_model->get_video();
        $data['downloads'] = $this->news_model->get_download();
        $data['friendsites'] = $this->news_model->get_friendsites();
        $this->load->view('header');
        $this->load->view('home_lists', $data);
        $this->load->view('footer');
    }

}
