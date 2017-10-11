<?php
class Download_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*资源下载 - 热门资源*/
    public function get_hots()
    {
        $this->db->order_by('hits', 'DESC');
        $this->db->limit(15);
        $query = $this->db->get_where('swan_download', array('status' => 'passed'));
        return $query->result_array();
    }

    /*资源下载 - 资源列表*/
    public function get_lists($slug = FALSE, $offset = FALSE)
    {
        //$counter = $this->db->count_all('swan_download');
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit($slug, $offset);
        $query = $this->db->get_where('swan_download', array('status' => 'passed'));
        return $query->result_array();
    }

    /*资源下载 - 分页*/
    public function get_pages()
    {
        $this->load->library('pagination');
        $config['base_url'] = site_url('/download/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $this->db->count_all('swan_download');
        $config['per_page'] = 10;
        $this->pagination->initialize($config);
        $this->load->library('table');
        $query = $this->db->get('swan_download',$config['per_page'],$this->uri->segment(4));
        $this->table->generate($query);
        //return $this->pagination->create_links();
    }

    /*资源下载 - 资源项*/
    public function get_item($id = FALSE)
    {
        /*计数器*/
        $this->db->where(array('id' => $id));
        $this->db->set('hits','hits + 1',FALSE);
        $this->db->update('swan_download');

        $query = $this->db->get_where('swan_download', array('id' => $id, 'status' => 'passed'));
        return $query->row_array();
    }

    /*资源下载 - 资源预览*/
    public function preview_item($id = FALSE)
    {
        /*计数器*/
        $this->db->where(array('id' => $id));
        $this->db->set('hits','hits + 1',FALSE);
        $this->db->update('swan_download');

        $query = $this->db->get_where('swan_download', array('id' => $id));
        return $query->row_array();
    }

}
