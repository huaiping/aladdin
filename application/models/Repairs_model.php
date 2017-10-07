<?php
class Repairs_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*在线报修*/
    public function repairsPost($data)
    {
        $this->db->insert('swan_repairs', $data);
    }

}
