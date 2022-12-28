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


    // function insertDataKategori($data) {
    //     $this->db->insert('alghi_post', $data);
    // }

    // function getDataKategoriDetail($id_posts) {
    //     $this->db->where('id_posts', $id_posts);
    //     $query = $this->db->get('alghi_post');
    //     return $query->row();
    // }

    // function updateDataKategori($id_posts, $data) {
    //     $this->db->where('id_posts', $id_posts);
    //     $this->db->update('alghi_post', $data);
    // }

    // function deleteDataKategori($id_posts) {
    //     $this->db->where('id_posts', $id_posts);
    //     $this->db->delete('alghi_post');
    // }

}