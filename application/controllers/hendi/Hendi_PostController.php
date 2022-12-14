<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hendi_PostController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hendi_post");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = $this->session->userdata('id');
        $data["posts"] = $this->hendi_post->where('id',$id);
        $this->load->view("hendi_admin/post/list", $data);
    }

    public function add()
    {
        $post = $this->hendi_post;
        $validation = $this->form_validation;
        $validation->set_rules($post->rules());

        if ($validation->run()) {
            $post->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("hendi_admin/post/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('hendi_admin/posts');
       
        $post = $this->hendi_post;
        $validation = $this->form_validation;
        $validation->set_rules($post->rules());

        if ($validation->run()) {
            $post->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["post"] = $post->getById($id);
        if (!$data["post"]) show_404();
        
        $this->load->view("hendi_admin/post/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        $this->session->set_flashdata('success2', 'Berhasil dihapus');
        
        if ($this->hendi_post->delete($id)) {
            redirect(site_url('Dashboard/index'));
        }
    }
}