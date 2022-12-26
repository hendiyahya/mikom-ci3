<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}

		public function index()
	{
		$queryAllPengabdian = $this->Ade_post->getDataPengabdian();
		$data = array('queryAllNgabdi' => $queryAllPengabdian);
		// var_dump($data);
		$this->load->view('ade_account/Dashboard', $data);
	}

}
