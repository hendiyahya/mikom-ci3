<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		// $this->load->library('pagination');
		$this->load->model('/alghi/Alghi_Post');
	}

	public function index()
	{
		if(!isset($_SESSION["username"])){
            //alihkan ke halaman login
		redirect(site_url('Login'));
		}

		// $data = array();

		// $config['base_url'] = site_url('alghi/Home'); //site url
        // $config['total_rows'] = $this->db->count_all('alghi_post'); //total row
        // $config['per_page'] = 4;  //show record per halaman
        // $config["uri_segment"] = 3;  // uri parameter
        // $choice = $config["total_rows"] / $config["per_page"];
        // $config["num_links"] = floor($choice);

        // $config['first_link']       = 'First';
        // $config['last_link']        = 'Last';
        // $config['next_link']        = 'Next';
        // $config['prev_link']        = 'Prev';

        // $this->pagination->initialize($config);
        // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$DATA['posts'] = $this->Alghi_Post->getData();

	// 	$this->pagination->initialize($config);
    // $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    //call the model function to get the department data
    // $data['campaignlist'] = $this->Alghi_Post->getData($config["per_page"], $data['page']);           

    // $data['pagination'] = $this->pagination->create_links();
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

	public function search(){
		$keyword = $this->input->post('keyword');
		$DATA['posts']= $this->Alghi_Post->get_keyword($keyword);

		$this->load->view('/alghi/VDashboard', $DATA);

	}
}