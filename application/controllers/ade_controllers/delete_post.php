<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class delete_post extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}

	public function fungsiDelete($ID)
	{
		$this->Ade_post->deleteDataPengabdian($ID);
		redirect(base_url('index.php/ade_controllers/Dashboard'));
	}
}