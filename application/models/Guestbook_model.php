<?php
class Guestbook_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

	public function get_messages($slug = FALSE, $offset = FALSE)
	{
        //if ($slug === FALSE)
        //{
			$this->db->order_by('pubtime', 'DESC');
			$this->db->limit($slug, $offset);
            $query = $this->db->get('swan_guestbook');
            return $query->result_array();
        //}
        //$query = $this->db->get_where('swan_guestbook', array('id' => $id));
        //return $query->row_array();
	}

}
