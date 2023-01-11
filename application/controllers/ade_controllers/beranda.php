<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}

	public function index()
	{
		if(!isset($_SESSION["username"])){
            //alihkan ke halaman login
			redirect(site_url('login'));
        }
		$queryAllPengabdian = $this->Ade_post->getDataPengabdianall();
		$data = array('queryAllNgabdi' => $queryAllPengabdian);
		// var_dump($data);
		$this->load->view('ade_account/beranda', $data);

		
		// $queryAllPostRandom = $this->Ade_post->getAllPostRandom();
		// $data = array('random' => $queryAllPostRandom);
		// // var_dump($data);


		// //library pagination
        // $this->load->library('pagination');

        // // $config['base_url'] = 'http://mikom-ci3.test:8181/makhi/home/index';
        // $config['base_url'] = 'http://mikom-ci3.test/ade_controllers/beranda/index';
        // $config['total_rows'] = $this->Ade_post->countAllPost();
        // $config['per_page'] = 5;

        // //style
        // $config['full_tag_open'] = '<nav><ul class="pagination">';
        // $config['full_tag_close'] = '</ul><nav>';

        // $config['first_link'] = 'First';
        // $config['first_tag_open'] = '<li class="page-item">';
        // $config['first_tag_close'] = '</li>';

        // $config['last_link'] = 'Last';
        // $config['last_tag_open'] = '<li class="page-item">';
        // $config['last_tag_close'] = '</li>';

        // $config['next_link'] = '&raquo';
        // $config['next_tag_open'] = '<li class="page-item">';
        // $config['next_tag_close'] = '</li>';

        // $config['prev_link'] = '&laquo';
        // $config['prev_tag_open'] = '<li class="page-item">';
        // $config['prev_tag_close'] = '</li>';

        // $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        // $config['cur_tag_close'] = '</a></li>';

        // // $config['num_tag_open'] = '<li class="page-item>';
        // // $config['num_tag_close'] = '</li>';

        // $config['attributes'] = array('class' => 'page-link');

        // $this->pagination->initialize($config);

        // $data['start'] = $this->uri->segment(4);
        // $data['pagination'] = $this->Ade_post->getDataPengabdianall($config['per_page'], $data['start']);

        // $data['posts'] = $this->Ade_post->getDataPengabdianall();



		// $this->load->view('ade_account/beranda', $data);
	}


}
