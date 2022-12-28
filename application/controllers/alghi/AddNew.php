<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNew extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('alghi/Alghi_Post');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->load->view('alghi/VAddNew');
  }

  public function add(){
    // $post = $this->Alghi_Post;
    //     // $validation = $this->form_validation;
    //     // $validation->set_rules($post->rules());

    //     // if ($validation->run()) {
    //         $post->save();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //         $message = 'Berhasil';
    //     // }
    //     redirect($_SERVER['HTTP_REFERER']);

    $data = [
      'id_kategori' => 1,
      'Judul' => $this->input->post('Judul'),
      'Kategori' => $this->input->post('Kategori'),
      'Isi' => $this->input->post('Isi')
    ];

    $this->db->insert('Alghi_Post', $data);

    redirect('/alghi/Dashboard');

    }
    public function edit($id = NULL){
    $data["post"] = $this->Alghi_Post->getDataById($id);
    // var_dump ($data);
    $this->load->view('alghi/VEdit', $data);
  }

    public function update()
    {
        $post = $this->input->post();
        $data = $this->Alghi_Post->getDataById($post["id_posts"]);
        $data["id_kategori"] = $post["id_kategori"];
        $data["Judul"] = $post["Judul"];
        $data["Kategori"] = $post["Kategori"];
        $data["Isi"] = $post["Isi"];
        // var_dump ($data);
        // die;
        $this->db->update('alghi_post', $data, ['id_posts' => $post['id_posts']]);
        redirect('/alghi/Dashboard');
    }

    public function delete($id = NULL)
    {
      // var_dump($id);
      // die;
      $this->db->delete('alghi_post', ["id_posts" => $id]);
      redirect('/alghi/Dashboard');
    }
}