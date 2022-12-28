<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('/alghi/Alghi_Post');
	}

	public function index()
	{
		if(!isset($_SESSION["username"])){
            //alihkan ke halaman login
		redirect(site_url('Login'));
		}

		$DATA['posts'] = $this->Alghi_Post->getData();
		// var_dump($DATA);
		// die;
		// $DATA = array('queryAllKategori' => $queryKategori);
		$this->load->view('/alghi/Home', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('VAddNew');
	}

	public function halaman_edit($Judul)
	{
		$queryKategoriDetail = $this->Alghi_Post->getDataKategoriDetail($Judul);
		$DATA = array('queryKategoriDetail' => $queryKategoriDetail);
		$this->load->view('VEdit', $DATA);
	}

	public function fungsiTambah()
	{
		$Judul = $this->input->post('Judul');
		$Kategori = $this->input->post('Kategori');
		$Isi = $this->input->post('Isi');

		$ArrInsert = array(
			'Judul' => $Judul,
			'Kategori' => $Kategori,
			'Isi' => $Isi
		);

		$this->Alghi_Post->insertDataKategori($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		$Judul = $this->input->post('Judul');
		$Kategori = $this->input->post('Kategori');
		$Isi = $this->input->post('Isi');

		$ArrUpdate = array(
			'Kategori' => $Kategori,
			'Isi' => $Isi
		);

		$this->Alghi_Post->updateDataKategori($Judul, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($Judul)
	{
		$this->Alghi_Post->deleteDataKategori($Judul);
		redirect(base_url(''));
	}
}