<?php
class Guestbook_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*公众互动 - 留言列表*/
    public function get_messages($slug = FALSE, $offset = FALSE)
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit($slug, $offset);
        $query = $this->db->get('swan_guestbook');
        return $query->result_array();
    }

}
