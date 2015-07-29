<?php
class Download_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_hots()
    {
        $this->db->order_by('hits', 'DESC');
        $this->db->limit(15);
        $query = $this->db->get('swan_download');
        return $query->result_array();
    }

    public function get_lists($slug = FALSE, $offset = FALSE)
    {
        //$counter = $this->db->count_all('swan_download');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit($slug, $offset);
        $query = $this->db->get('swan_download');
        return $query->result_array();
    }

    public function get_pages()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/download/page/';
        $config['uri_segment'] = 4;
        $config['total_rows'] = $this->db->count_all('swan_download');
        $config['per_page'] = 10;
        $this->pagination->initialize($config);
        $this->load->library('table');
        $query = $this->db->get('swan_download',$config['per_page'],$this->uri->segment(4));
        $this->table->generate($query);
        //return $this->pagination->create_links();
    }

    public function get_item($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('swan_download');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_download', array('id' => $slug));
        return $query->row_array();
    }

}
