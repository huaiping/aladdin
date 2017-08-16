<?php
class Survey_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*问卷调查*/
    public function surveyPost($data)
    {
        $this->db->insert('swan_survey', $data);
    }

}
