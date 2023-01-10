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

        $config['base_url'] = 'http://mikom-ci3.test:8181/makhi/home/index';
        // $config['base_url'] = 'http://mikom-ci3.test/makhi/home/index';
        $config['total_rows'] = $this->Post_model->countAllPost();
        $config['per_page'] = 6;

        //style
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul><nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        // $config['num_tag_open'] = '<li class="page-item>';
        // $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

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
