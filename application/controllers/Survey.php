<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->model('survey_model');
    }

    public function index()
    {
        if ($this->is_login())
        {
            $this->load->view('header');
            $this->load->view('survey');
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
        if ($this->is_login())
        {
            $now = date("Y-m-d H:i:s");
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q101'),
                'sx' => $this->input->post('Q102'),
                'yy' => $this->input->post('Q103'),
                'wl' => $this->input->post('Q104'),
                'hx' => $this->input->post('Q105'),
                'sw' => $this->input->post('Q106'),
                'zz' => $this->input->post('Q107'),
                'ls' => $this->input->post('Q108'),
                'dl' => $this->input->post('Q109'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q201'),
                'sx' => $this->input->post('Q202'),
                'yy' => $this->input->post('Q203'),
                'wl' => $this->input->post('Q204'),
                'hx' => $this->input->post('Q205'),
                'sw' => $this->input->post('Q206'),
                'zz' => $this->input->post('Q207'),
                'ls' => $this->input->post('Q208'),
                'dl' => $this->input->post('Q209'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q301'),
                'sx' => $this->input->post('Q302'),
                'yy' => $this->input->post('Q303'),
                'wl' => $this->input->post('Q304'),
                'hx' => $this->input->post('Q305'),
                'sw' => $this->input->post('Q306'),
                'zz' => $this->input->post('Q307'),
                'ls' => $this->input->post('Q308'),
                'dl' => $this->input->post('Q309'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q401'),
                'sx' => $this->input->post('Q402'),
                'yy' => $this->input->post('Q403'),
                'wl' => $this->input->post('Q404'),
                'hx' => $this->input->post('Q405'),
                'sw' => $this->input->post('Q406'),
                'zz' => $this->input->post('Q407'),
                'ls' => $this->input->post('Q408'),
                'dl' => $this->input->post('Q409'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q501'),
                'sx' => $this->input->post('Q502'),
                'yy' => $this->input->post('Q503'),
                'wl' => $this->input->post('Q504'),
                'hx' => $this->input->post('Q505'),
                'sw' => $this->input->post('Q506'),
                'zz' => $this->input->post('Q507'),
                'ls' => $this->input->post('Q508'),
                'dl' => $this->input->post('Q509'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q601'),
                'sx' => $this->input->post('Q602'),
                'yy' => $this->input->post('Q603'),
                'wl' => $this->input->post('Q604'),
                'hx' => $this->input->post('Q605'),
                'sw' => $this->input->post('Q606'),
                'zz' => $this->input->post('Q607'),
                'ls' => $this->input->post('Q608'),
                'dl' => $this->input->post('Q609'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q701'),
                'sx' => $this->input->post('Q702'),
                'yy' => $this->input->post('Q703'),
                'wl' => $this->input->post('Q704'),
                'hx' => $this->input->post('Q705'),
                'sw' => $this->input->post('Q706'),
                'zz' => $this->input->post('Q707'),
                'ls' => $this->input->post('Q708'),
                'dl' => $this->input->post('Q709'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q801'),
                'sx' => $this->input->post('Q802'),
                'yy' => $this->input->post('Q803'),
                'wl' => $this->input->post('Q804'),
                'hx' => $this->input->post('Q805'),
                'sw' => $this->input->post('Q806'),
                'zz' => $this->input->post('Q807'),
                'ls' => $this->input->post('Q808'),
                'dl' => $this->input->post('Q809'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q901'),
                'sx' => $this->input->post('Q902'),
                'yy' => $this->input->post('Q903'),
                'wl' => $this->input->post('Q904'),
                'hx' => $this->input->post('Q905'),
                'sw' => $this->input->post('Q906'),
                'zz' => $this->input->post('Q907'),
                'ls' => $this->input->post('Q908'),
                'dl' => $this->input->post('Q909'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            $data = array(
                'xm' => $this->input->post('name'),
                'yw' => $this->input->post('Q1001'),
                'sx' => $this->input->post('Q1002'),
                'yy' => $this->input->post('Q1003'),
                'wl' => $this->input->post('Q1004'),
                'hx' => $this->input->post('Q1005'),
                'sw' => $this->input->post('Q1006'),
                'zz' => $this->input->post('Q1007'),
                'ls' => $this->input->post('Q1008'),
                'dl' => $this->input->post('Q1009'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
                'timestamp' => $now,
                'survey' => $this->input->post('survey'),
                'memo' => 'pend'
            );
            $data = $this->security->xss_clean($data);
            $this->survey_model->surveyPost($data);
            redirect('membership/plaza');
        }
        else
        {
            redirect('membership');
        }
        //$data['results'] = $this->survey_model->surveyPost();
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
