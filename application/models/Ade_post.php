<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ade_post extends CI_Model {

	function getDataPengabdianall() {
		$query = $this->db->get('ade_posts');
		return $query->result();
	}

	function getDataPengabdian(){
		$id = $this->session->userdata('id');
		return $this->db->get_where('ade_posts', ["user_id" => $id])->result_array();
	}

	function insertDataPengabdian($data) {
		$this->db->insert('ade_posts', $data);
	}

	function getDataPengabdianDetail($ID) {
		$this->db->where('ID', $ID);
		$query = $this->db->get('ade_posts');
		return $query->row();
	}

	function updateDataPengabdian($ID, $data) {
		$this->db->where('ID', $ID);
		$this->db->update('ade_posts', $data);
	}

	function deleteDataPengabdian($ID) {
		$this->db->where('ID', $ID);
		$this->db->delete('ade_posts');
	}

	public function getPost($limit, $start)
    {
        $this->db->order_by('ID', 'DESC');
        return $this->db->get('ade_posts', $limit, $start)->result_array();
    }

    public function getAllPostRandom()
    {
        $this->db->order_by('ID', 'RANDOM');
        return $this->db->get('ade_posts')->result_array();
    }
	
    public function countAllPost()
    {
        return $this->db->get('ade_posts')->num_rows();
    }


}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */