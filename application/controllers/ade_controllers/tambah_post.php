<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_post extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}

	public function halaman_tambah() 
	{
		$this->load->view('ade_account/tambah_post');
	}

	public function fungsiTambah()
	{

		$ID = $this->input->post('ID');
		$Judul = $this->input->post('Judul');
		$Waktu = $this->input->post('Waktu');
		$Caption = $this->input->post('Caption');
		$Foto = $this->input->post('Foto');
		$id = $this->session->userdata('id');
		// $Foto = $_FILES['Foto'];
		// if ($Foto=''){}else 
		// {
		// 	$config = array(
		// 	'upload_path' => "assets/img/",
		// 	'allowed_types' => "gif|jpg|png|jpeg|pdf",
		// 	'overwrite' => TRUE,
		// 	'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		// 	'max_height' => "768",
		// 	'max_width' => "1024"
		// 	);
		//   	// $config['upload_path']          = 
        //   	// $config['allowed_types']        = 'gif|jpg|png';
        //     // $config['max_size']             = 100;
        //     // $config['max_width']            = 1024;
        //     // $config['max_height']           = 768;


        //     // $config['upload_path'] = './assets/img/';
		// 	// $config['allowed_types'] = 'gif|jpg|png';
		// 	// 'overwrite' => TRUE,
		// 	// $config['max_size']     = '2048000';
		// 	// $config['max_width'] = '1024';
		// 	// $config['max_height'] = '768';


        //     $this->load->library('upload', $config);

        //     if ( ! $this->upload->do_upload('userfile'))
        //     {
        //         $error = array('error' => $this->upload->display_errors());

        //         $this->load->view('ade_account/tambah_post', $error);
        //     }
        //     else
        //     {
        //         $data = array('upload_data' => $this->upload->data());

        //         $this->load->view('ade_account/dashboard', $data);
        //     }

		// }

		$ArrInsert = array(
			'ID' => $ID,
			'Judul' => $Judul,
			'Waktu' => $Waktu,
			'Caption' => $Caption,
			'Foto' => $Foto,
			'user_id' => $id
		);

		$this->Ade_post->insertDataPengabdian($ArrInsert);
		redirect(base_url('index.php/ade_controllers/Dashboard'));
	}
}