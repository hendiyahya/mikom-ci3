<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('makhi/Post_model');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    public function index()
    {
        $data['judul'] = 'Post';
        $data['user'] = $this->db->get_where('hendi_users', ['username' => $this->session->userdata('username')])->row_array();
        $data['posts'] = $this->db->get_where('makhi_posts', ['user_id' => $data['user']['id_user']])->result_array();

        // echo 'Selamat datang ' . $data['user']['id_user'];
        // die;
        $this->load->view('makhi/dashboard/layouts/header', $data);
        $this->load->view('makhi/dashboard/layouts/sidebar', $data);
        $this->load->view('makhi/dashboard/posts', $data);
        $this->load->view('makhi/dashboard/layouts/footer');
    }

    public function create()
    {
        $data['username'] = $this->db->get_where('hendi_users', ['username' => $this->session->userdata('username')])->row_array();
        // echo 'Selamat datang ' . $data['username']['id_user'];
        // die;
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('body', 'Body', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Create Post';
            $this->load->view('makhi/dashboard/layouts/header', $data);
            $this->load->view('makhi/dashboard/layouts/sidebar');
            $this->load->view('makhi/dashboard/create');
            $this->load->view('makhi/dashboard/layouts/footer');
        } else {

            $post = [
                'title' => $this->input->post('title', true),
                'body' => $this->input->post('body', true),
                // 'pic' => $foto,
                'excerpt' => strip_tags(substr($this->input->post('body', true), 0, 100)),
                'excerpt_awal' => strip_tags(substr($this->input->post('body', true), 0, 50)),
                'user_id' => $data['username']['id_user'],
                // 'datecreated' => date("Y/m/d h:i:sa", time())
                'datecreated' => date("Y/m/d", time())

            ];




            $this->Post_model->tambah($post);

            redirect('makhi/dashboard');
        }
    }

    public function detail($id)
    {
        $data['post'] = $this->Post_model->getDetail($id);
        $data['judul'] = 'Detail Post';

        $this->load->view('makhi/dashboard/layouts/header', $data);
        $this->load->view('makhi/dashboard/layouts/sidebar');
        $this->load->view('makhi/dashboard/detail', $data);
        $this->load->view('makhi/dashboard/layouts/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Post';

        $data['post'] = $this->Post_model->getDetail($id);

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('body', 'Title', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('makhi/dashboard/layouts/header', $data);
            $this->load->view('makhi/dashboard/layouts/sidebar');
            $this->load->view('makhi/dashboard/edit', $data);
            $this->load->view('makhi/dashboard/layouts/footer');
        } else {
            $this->Post_model->editPost($id);
            redirect('makhi/dashboard');
        }
    }

    public function hapus($id)
    {
        $this->Post_model->hapusPost($id);
        $this->session->set_flashdata('success', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Post has been deleted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('makhi/dashboard');
    }

    public function gambar()
    {
        $data['judul'] = 'Image';

        $this->load->view('makhi/dashboard/layouts/header', $data);
        $this->load->view('makhi/dashboard/layouts/sidebar');
        $this->load->view('makhi/dashboard/gambar', $data);
        $this->load->view('makhi/dashboard/layouts/footer');
    }

    public function insert_image()
    {
        $config = [
            'file_name' => time(),
            'overwirte' => TRUE,
            'max_width' => '1028',
            'max_height' => '800',
            'max_size' => '240000',
            'allowed_types' => 'gif|png|jpg|jpeg',
            'upload_path' => 'assets/makhi/img/upload'
        ];

        $this->upload->initialize($config);

        // $data = [
        //     'image' => $this->upload->do_upload('gambar')
        // ];

        // if ($this->upload->do_upload('gambar')) {
        //     // $imageData = $this->upload->do_upload('gambar');
        //     // $fileName = $imageData['file_name'];
        //     $this->db->insert('image', $data);
        //     echo "<pre>";
        //     print_r($this->upload->data());
        // } else {
        //     echo $this->upload->display_errors();
        // }

        if (!$this->upload->do_upload('gambar')) {
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $gambar = $data['file_name'];

            $upload = ['image' => $gambar];
            echo "<pre>";
            print_r($this->upload->data());
            $this->db->insert('image', $upload);


            redirect('makhi/dashboard/lihatgambar');
        }
    }

    public function lihatgambar()
    {
        $data['judul'] = 'lihat images';
        $data['images'] = $this->db->get('image')->result_array();;

        $this->load->view('makhi/dashboard/layouts/header', $data);
        $this->load->view('makhi/dashboard/layouts/sidebar');
        $this->load->view('makhi/dashboard/lihatgambars', $data);
        $this->load->view('makhi/dashboard/layouts/footer');
    }

    public function delete_image($id)
    {
        $data = $this->db->get_where('image', ['id' => $id])->row_array();
        unlink(base_url('assets/makhi/img/upload' . $data['image']));
        // var_dump($data);
        // die;

        $this->db->delete('image', ['id' => $id]);

        redirect('makhi/dashboard/lihatgambar');
    }
}