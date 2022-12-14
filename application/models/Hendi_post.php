<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hendi_post extends CI_Model
{
    private $_table = "hendi_posts";

    public $id;
    public $category_id;
    public $user_id;
    public $title;
    public $image = "default.jpg";
    public $body;

    public function rules()
    {
        return [
            ['field' => 'title',
            'label' => 'title',
            'rules' => 'required'],
            
            ['field' => 'body',
            'label' => 'body',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = uniqid();
        $this->title = $post["title"];
        $this->body = $post["body"];
        $this->category_id = 1;
        $this->user_id = 1;
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->title = $post["title"];
        $this->body = $post["body"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}