<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

	public function get_news($id = FALSE)
	{
        if ($id === FALSE)
        {
			$this->db->order_by('pubtime', 'DESC');
			$this->db->limit(10);
            $query = $this->db->get('swan_news');
            return $query->result_array();
        }
		/*计数器*/
		$this->db->where(array('id' => $id));
		$this->db->set('hits','hits + 1',FALSE);
		$this->db->update('swan_news');

        $query = $this->db->get_where('swan_news', array('id' => $id));
        return $query->row_array();
	}

	public function get_video($id = FALSE)
	{
        if ($id === FALSE)
        {
			$this->db->order_by('pubtime', 'DESC');
			$this->db->limit(10);
            $query = $this->db->get('swan_video');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_video', array('id' => $id));
        return $query->row_array();
	}

	public function get_download($id = FALSE)
	{
        if ($id === FALSE)
        {
			$this->db->order_by('pubtime', 'DESC');
			$this->db->limit(12);
            $query = $this->db->get('swan_download');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_download', array('id' => $id));
        return $query->row_array();
	}

	public function get_friendsites($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('swan_links');
			return $query->result_array();
		}
		$query = $this->db->get_where('swan_links', array('id' => $id));
		return $query->row_array();
	}

}
