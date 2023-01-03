<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alghi_Post extends CI_Model {

    function getData() {
        $query = $this->db->get('Alghi_Post');
        return $query->result();
    }

    function getDataByID($id){
        return $this->db->get_where('Alghi_Post', ["id_posts" => $id])->row_array();
    }

    public function JoinCategoryByID()
    {
        $id = $this->session->userdata('id');
        return $this->db->get_where('Alghi_Post', ["user_id" => $id])->result_array();
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('alghi_post');
        $this->db->like('Judul', $keyword);
        $this->db->or_like('Kategori', $keyword);
        $this->db->or_like('Isi', $keyword);
        return $this->db->get()->result();
    }


}