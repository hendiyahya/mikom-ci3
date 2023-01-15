<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ade_post extends CI_Model {

	function getDataPengabdianall() {
		$this->db->where('Status', 1);
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
		return $query->row_array();
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
		$this->db->where('Status', 1);
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

	public function editPost($ID, $gambar)
    {
        $data = $this->getDataPengabdianDetail($ID);

        $post =  [
			'Judul' => $this->input->post('Judul', true),
			'Waktu' => $this->input->post('Waktu', true),
			'Caption' => $this->input->post('Caption', true),
			'Foto' => $gambar,
			'Status' => $this->input->post('Status', true)
			// 'datecreated' => date("Y/m/d h:i:sa", time())
		];
		// var_dump($post);
		// die;
        $data['Judul'] = $post['Judul'];
        $data['Waktu'] = $post['Waktu'];
        $data['Caption'] = $post['Caption'];
        // $data['Foto'] = $post['Foto'];
		if ($post['Foto'] == Null){
			$data['Foto'];
		} else{
			$data['Foto'] = $post['Foto'];
		}
		$data['Status'] = $post['Status'];

		

        $this->db->update('ade_posts', $data, ['ID' => $ID]);
    }

}

/* End of file M_Mahasiswa.php */
/* Location: ./application/models/M_Mahasiswa.php */