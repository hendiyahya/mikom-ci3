<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hendi_PostController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hendi_post");
        $this->load->model("hendi_categories");
        $this->load->model("hendi_comment");
        $this->load->library('form_validation');
        $this->hendi_login->cek_login(); 
    }

    public function index()
    {
        $data["posts"] = $this->hendi_post->JoinCategoryByID();
        $data["categories"] = $this->hendi_categories->getAll();
        $data["comments"] = $this->hendi_comment->getAll();

        $this->load->view("hendi_admin/post/index", $data);
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

        $data["categories"] = $this->hendi_categories->getAll();

        $this->load->view("hendi_admin/post/new_form",$data);
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
        $data["categories"] = $this->hendi_categories->getAll();
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