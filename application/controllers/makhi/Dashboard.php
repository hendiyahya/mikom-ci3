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
        // $this->db->order_by('id', 'DESC');
        // $data['posts'] = $this->db->get_where('makhi_posts', ['user_id' => $data['user']['id_user']])->result_array();

        //pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://mikom-ci3.test:8181/makhi/dashboard/index';
        // $config['base_url'] = 'http://mikom-ci3.test/makhi/dashboard/index';
        $config['total_rows'] = $this->Post_model->countAllPost();
        $config['per_page'] = 10;

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
            $config = [
                'file_name' => time(), //ganti nama file jadi time
                'overwrite' => TRUE, //ubah nama file
                'max_width' => '1200', //maks panjang gambar (px)
                'max_height' => '900', //maks tinggi gambar (px)
                'max_size' => '2400000', //maks ukuran gambar (byte)
                'allowed_types' => 'gif|png|jpg|jpeg', //type yang boleh diinput
                'upload_path' => 'assets/makhi/img/upload' //tempat gambar akan disimpan
            ];

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) { //error
                echo $this->upload->display_errors();
            } else {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            }

            $post = [
                'title' => $this->input->post('title', true),
                'body' => $this->input->post('body', true),
                'pic' => $gambar,
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
            $config = [
                'file_name' => time(), //ganti nama file jadi time
                'overwrite' => TRUE, //ubah nama file
                'max_width' => '1200', //maks panjang gambar (px)
                'max_height' => '900', //maks tinggi gambar (px)
                'max_size' => '2400000', //maks ukuran gambar (byte)
                'allowed_types' => 'gif|png|jpg|jpeg', //type yang boleh diinput
                'upload_path' => 'assets/makhi/img/upload' //tempat gambar akan disimpan
            ];

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) { //error
                echo $this->upload->display_errors();
            } else {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            }
            // var_dump($gambar);
            // die;
            $this->Post_model->editPost($id, $gambar);
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
