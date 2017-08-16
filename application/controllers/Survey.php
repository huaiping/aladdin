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
                'Q101' => $this->input->post('Q101'),
                'Q102' => $this->input->post('Q102'),
                'Q103' => $this->input->post('Q103'),
                'Q104' => $this->input->post('Q104'),
                'Q105' => $this->input->post('Q105'),
                'Q106' => $this->input->post('Q106'),
                'Q107' => $this->input->post('Q107'),
                'Q108' => $this->input->post('Q108'),
                'Q109' => $this->input->post('Q109'),
                'Q201' => $this->input->post('Q201'),
                'Q202' => $this->input->post('Q202'),
                'Q203' => $this->input->post('Q203'),
                'Q204' => $this->input->post('Q204'),
                'Q205' => $this->input->post('Q205'),
                'Q206' => $this->input->post('Q206'),
                'Q207' => $this->input->post('Q207'),
                'Q208' => $this->input->post('Q208'),
                'Q209' => $this->input->post('Q209'),
                'Q301' => $this->input->post('Q301'),
                'Q302' => $this->input->post('Q302'),
                'Q303' => $this->input->post('Q303'),
                'Q304' => $this->input->post('Q304'),
                'Q305' => $this->input->post('Q305'),
                'Q306' => $this->input->post('Q306'),
                'Q307' => $this->input->post('Q307'),
                'Q308' => $this->input->post('Q308'),
                'Q309' => $this->input->post('Q309'),
                'Q401' => $this->input->post('Q401'),
                'Q402' => $this->input->post('Q402'),
                'Q403' => $this->input->post('Q403'),
                'Q404' => $this->input->post('Q404'),
                'Q405' => $this->input->post('Q405'),
                'Q406' => $this->input->post('Q406'),
                'Q407' => $this->input->post('Q407'),
                'Q408' => $this->input->post('Q408'),
                'Q409' => $this->input->post('Q409'),
                'Q501' => $this->input->post('Q501'),
                'Q502' => $this->input->post('Q502'),
                'Q503' => $this->input->post('Q503'),
                'Q504' => $this->input->post('Q504'),
                'Q505' => $this->input->post('Q505'),
                'Q506' => $this->input->post('Q506'),
                'Q507' => $this->input->post('Q507'),
                'Q508' => $this->input->post('Q508'),
                'Q509' => $this->input->post('Q509'),
                'Q601' => $this->input->post('Q601'),
                'Q602' => $this->input->post('Q602'),
                'Q603' => $this->input->post('Q603'),
                'Q604' => $this->input->post('Q604'),
                'Q605' => $this->input->post('Q605'),
                'Q606' => $this->input->post('Q606'),
                'Q607' => $this->input->post('Q607'),
                'Q608' => $this->input->post('Q608'),
                'Q609' => $this->input->post('Q609'),
                'Q701' => $this->input->post('Q701'),
                'Q702' => $this->input->post('Q702'),
                'Q703' => $this->input->post('Q703'),
                'Q704' => $this->input->post('Q704'),
                'Q705' => $this->input->post('Q705'),
                'Q706' => $this->input->post('Q706'),
                'Q707' => $this->input->post('Q707'),
                'Q708' => $this->input->post('Q708'),
                'Q709' => $this->input->post('Q709'),
                'Q801' => $this->input->post('Q801'),
                'Q802' => $this->input->post('Q802'),
                'Q803' => $this->input->post('Q803'),
                'Q804' => $this->input->post('Q804'),
                'Q805' => $this->input->post('Q805'),
                'Q806' => $this->input->post('Q806'),
                'Q807' => $this->input->post('Q807'),
                'Q808' => $this->input->post('Q808'),
                'Q809' => $this->input->post('Q809'),
                'Q901' => $this->input->post('Q901'),
                'Q902' => $this->input->post('Q902'),
                'Q903' => $this->input->post('Q903'),
                'Q904' => $this->input->post('Q904'),
                'Q905' => $this->input->post('Q905'),
                'Q906' => $this->input->post('Q906'),
                'Q907' => $this->input->post('Q907'),
                'Q908' => $this->input->post('Q908'),
                'Q909' => $this->input->post('Q909'),
                'Q1001' => $this->input->post('Q1001'),
                'Q1002' => $this->input->post('Q1002'),
                'Q1003' => $this->input->post('Q1003'),
                'Q1004' => $this->input->post('Q1004'),
                'Q1005' => $this->input->post('Q1005'),
                'Q1006' => $this->input->post('Q1006'),
                'Q1007' => $this->input->post('Q1007'),
                'Q1008' => $this->input->post('Q1008'),
                'Q1009' => $this->input->post('Q1009'),
                'xm' => $this->input->post('name'),
                'message' => $this->input->post('content'),
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
