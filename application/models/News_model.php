<?php
class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /*新闻中心 - 新闻项*/
    public function get_news($id = FALSE)
    {
        /*计数器*/
        $this->db->where(array('id' => $id));
        $this->db->set('hits','hits + 1',FALSE);
        $this->db->update('swan_news');

        $query = $this->db->get_where('swan_news', array('id' => $id));
        return $query->row_array();
    }

    /*新闻中心 - 新闻列表*/
    public function get_newslist()
    {
        $this->db->order_by('pubtime', 'DESC');
        $this->db->limit(20);
        $query = $this->db->get('swan_news');
        return $query->result_array();
    }

    /*新闻中心 - 评论列表*/
    public function get_comment($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('swan_comment');
            return $query->result_array();
        }
        $query = $this->db->get_where('swan_comment', array('sid' => $id));
        return $query->result_array();
    }

    /*新闻中心 - 文章评论*/
    public function commentPost($data)
    {
        $this->db->insert('swan_comment', $data);
    }

}
