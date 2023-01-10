<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('makhi/Post_model');
    }
    public function index()
    {
        if (!isset($_SESSION["username"])) {
            //alihkan ke halaman login
            redirect(site_url('login'));
        }
        $data['judul'] = 'Home';

        //library pagination
        $this->load->library('pagination');

        // $config['base_url'] = 'http://mikom-ci3.test:8181/makhi/home/index';
        $config['base_url'] = 'http://mikom-ci3.test/makhi/home/index';
        $config['total_rows'] = $this->Post_model->countAllPost();
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['pagination'] = $this->Post_model->getPost($config['per_page'], $data['start']);

        $data['posts'] = $this->Post_model->getAllPost();
        $data['random'] = $this->Post_model->getAllPostRandom();



        $this->load->view('makhi/templates/header', $data);
        $this->load->view('makhi/home', $data);
        $this->load->view('makhi/templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Post';
        $data['post'] = $this->Post_model->getDetail($id);

        $data['posts'] = $this->Post_model->getAllPost();
        $data['random'] = $this->Post_model->getAllPostRandom();

        $this->load->view('makhi/templates/header', $data);
        $this->load->view('makhi/post', $data);
        $this->load->view('makhi/templates/footer');
    }
}
