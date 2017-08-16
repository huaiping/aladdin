<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('home_model');
    }

    public function index()
    {
        $data['latest'] = $this->home_model->get_latest();
        $data['teachers'] = $this->home_model->get_teachers();
        $data['students'] = $this->home_model->get_students();
        $data['parents'] = $this->home_model->get_parents();
        $data['notices'] = $this->home_model->get_notices();
        $data['reports'] = $this->home_model->get_reports();
        $data['videos'] = $this->home_model->get_video();
        $data['slides'] = $this->home_model->get_slides();
        $data['downloads'] = $this->home_model->get_download();
        $data['teaching'] = $this->home_model->get_teaching();
        $data['friendsites'] = $this->home_model->get_friendsites();
        $this->load->view('header');
        $this->load->view('home_lists', $data);
        $this->load->view('footer');
    }

}
