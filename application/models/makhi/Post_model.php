<?php

class Post_model extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('makhi_posts', $data);
    }

    public function hapusPost($id)
    {
        $this->db->delete('makhi_posts', ['id' => $id]);
    }

    public function getDetail($id)
    {
        return $this->db->get_where('makhi_posts', ['id' => $id])->row_array();
    }

    public function editPost($id)
    {
        $data = $this->getDetail($id);
        $post = [
            "title" => $this->input->post('title', true),
            "body" => $this->input->post('body', true),
            "excerpt" => strip_tags(substr($this->input->post('body', true), 0, 240))
        ];

        $data['title'] = $post['title'];
        $data['body'] = $post['body'];
        $data['excerpt'] = $post['excerpt'];

        $this->db->update('makhi_posts', $data, ['id' => $id]);
    }

    public function getAllPost()
    {
        return $this->db->get('makhi_posts')->result_array();
    }
}
