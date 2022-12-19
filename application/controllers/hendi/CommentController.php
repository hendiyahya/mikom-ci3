<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CommentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hendi/hendi_post");
        $this->load->model("hendi/hendi_comment");
        $this->load->model("hendi/hendi_categories");
        $this->load->library('form_validation');
    }

    public function add()
    {
        $comment = $this->hendi_comment;
        $validation = $this->form_validation;
        $validation->set_rules($comment->rules());

        if ($validation->run()) {
            $comment->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $message = "Success";
        }

        redirect($_SERVER['HTTP_REFERER']);

    }
    
}

