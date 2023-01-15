<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_post extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}
public function fungsi_detail($ID) 
	{
		$data['post'] = $this->Ade_post->getDataPengabdianDetail($ID);
		$this->load->view('ade_account/detail_post', $data);
	}
}