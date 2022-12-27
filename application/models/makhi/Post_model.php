<?php

class Post_model extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('makhi_posts', $data);
    }

    public function hapusPost($id)
    {
        // $data = $this->getDetail($id);
        // unlink(FCPATH . "/assets/makhi/img/upload/" . $data->pic);
        $this->db->delete('makhi_posts', ['id' => $id]);
    }

    public function getDetail($id)
    {
        return $this->db->get_where('makhi_posts', ['id' => $id])->row_array();
    }

    public function editPost($id, $gambar)
    {
        $data = $this->getDetail($id);

        $post = [
            "title" => $this->input->post('title', true),
            "body" => $this->input->post('body', true),
            "pic" => $gambar,
            "excerpt" => strip_tags(substr($this->input->post('body', true), 0, 100)),
            "excerpt_awal" => strip_tags(substr($this->input->post('body', true), 0, 50)),
        ];

        $data['title'] = $post['title'];
        $data['body'] = $post['body'];
        $data['pic'] = $post['pic'];
        $data['excerpt'] = $post['excerpt'];
        $data['excerpt_awal'] = $post['excerpt_awal'];


        $this->db->update('makhi_posts', $data, ['id' => $id]);
    }

    public function getAllPost()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('makhi_posts')->result_array();
    }
}
