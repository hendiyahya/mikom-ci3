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
