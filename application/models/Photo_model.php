<?php
class Photo_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*图片中心 - 大类别*/
    public function get_category()
    {
        $this->db->select('id, category');
        $this->db->group_by('category');
        $query = $this->db->get_where('swan_photo', array('status' => 'passed'));
        return $query->result_array();
    }

    /*图片中心 - 小类别*/
    public function get_subcategory()
    {
        $this->db->group_by('subcategory');
        $query = $this->db->get_where('swan_photo', array('status' => 'passed'));
        return $query->result_array();
    }

    /*图片中心 - 图片项*/
    public function get_photos($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get_where('swan_photo', array('status' => 'passed'));
            return $query->result_array();
        }
        $query = $this->db->query("SELECT * FROM swan_photo WHERE subcategory=(select subcategory from swan_photo where id=$id)");
        return $query->result_array();
    }

    /*图片中心 - 瀑布流*/
    public function get_waterfall($page = FALSE)
    {
        //$page = json_encode($this->input->post('page'));
        $page = 0;
        $num = 10;
        $offset = $page * $num;

        if ($page === FALSE)
        {
            $query = $this->db->get('swan_photo');
            return $query->result_array();
        }
        //$query = $this->db->query("SELECT * FROM swan_photo limit $offset, $num");
        $this->db->limit($num, $offset);
        $query = $this->db->get('swan_photo');
        return $query->result_array();
    }

}
