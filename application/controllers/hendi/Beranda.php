<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("hendi/hendi_post");
        $this->load->model("hendi/hendi_categories");
        $this->load->model("hendi/hendi_comment");
        $this->load->library('form_validation');
    }
	
	public function index()
	{
        if(!isset($_SESSION["username"])){
            //alihkan ke halaman login
			redirect(site_url('login'));
        }
        

		$data["posts"] = $this->hendi_post->joinUsers();
        $data["categories"] = $this->hendi_categories->getAll();
        $data["comments"] = $this->hendi_comment->JoinUsers();
        // var_dump($data["posts"]);
        // die;
        $this->load->view("hendi_account/beranda", $data);
	}
}
