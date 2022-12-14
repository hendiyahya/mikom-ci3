<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("hendi_post");
        $this->load->library('form_validation');
    }
	
	public function index()
	{
		$data["posts"] = $this->hendi_post->getAll();
        $this->load->view("hendi_account/beranda", $data);
	}
}
