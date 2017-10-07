<?php
class Repairs_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*在线报修 - 提交工单*/
    public function repairsPost($data)
    {
        $this->db->insert('swan_repairs', $data);
    }

    /*在线报修 - 工单列表*/
    public function get_lists()
    {
        $this->db->order_by('pubtime', 'DESC');
        $query = $this->db->get('swan_repairs');
        return $query->result_array();
    }

}
