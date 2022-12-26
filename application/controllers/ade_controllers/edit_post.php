<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_post extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}

	public function halaman_edit($ID)
	{
		$queryPengabdianDetail = $this->Ade_post->getDataPengabdianDetail($ID);
		$data = array('queryNgabdiDetail' => $queryPengabdianDetail);
		$this->load->view('ade_account/edit_post', $data);
	}

	
	public function fungsiEdit()
	{
		$ID = $this->input->post('ID');
		$Judul = $this->input->post('Judul');
		$Waktu = $this->input->post('Waktu');
		$Caption = $this->input->post('Caption');
		// $Foto = $_FILES['Foto'];
		// if ($Foto=''){}else{
		// 	$config['upload_path']  = './assets/img';
		// 	$config['allow_types']  = 'jpg|png|gif';

		// 	$this->load->library('upload', $config);
		// 	if(!$this->upload->do_while('Foto')){
		// 		echo "Upload Gagal"; die();
		// 	}else{
		// 		$Foto=$this->upload->data('file_name');
		// 	}
		// }

		$ArrUpdate = array(
			'ID' => $ID,
			'Judul' => $Judul,
			'Waktu' => $Waktu,
			'Caption' => $Caption
			// 'Foto' => $Foto
		);

		$this->Ade_post->updateDataPengabdian($ID, $ArrUpdate);
		redirect(base_url('index.php/ade_controllers/Dashboard'));
	}

	public function detail_post($ID) 
	{
		$queryPengabdianDetail = $this->Ade_post->getDataPengabdianDetail($ID);
		$data = array('queryNgabdiDetail' => $queryPengabdianDetail);
		$this->load->view('ade_account/detail_post', $data);
	}
}	