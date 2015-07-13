<?php
class Video_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_items($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('swan_video');
            return $query->result_array();
        }
        /*计数器*/
        $this->db->where(array('id' => $id));
        $this->db->set('hits','hits + 1',FALSE);
        $this->db->update('swan_video');

        $query = $this->db->get_where('swan_video', array('id' => $id));
        return $query->row_array();
    }

    public function get_hots()
    {
        $this->db->order_by('hits', 'DESC');
        $this->db->limit(15);
        $query = $this->db->get('swan_video');
        return $query->result_array();
    }

}
