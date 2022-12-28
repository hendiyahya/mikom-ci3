<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('alghi/Alghi_Post');
	}

	public function index()
	{
		if(!isset($_SESSION["username"])){
            //alihkan ke halaman login
		redirect(site_url('Login'));
		}

		$this->load->view('alghi/partials/head.php');
		$id_posts = $this->session->userdata('id_posts');
        $data['posts'] = $this->Alghi_Post->GetData();
        $this->load->view('alghi/VDashboard',$data);
	}

	public function detail($id)
	{
		// code...
		$data["post"] = $this->Alghi_Post->getDataById($id);
    	// var_dump ($data);
    	$this->load->view('alghi/VDetail', $data);
	}

}
