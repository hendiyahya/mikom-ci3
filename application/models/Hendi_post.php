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
    
    public function JoinUsers()
    {
        // $this->db->select('*');
        $this->db->from('hendi_posts');
        $this->db->join('hendi_users', 'hendi_users.id_user = hendi_posts.user_id');
        $this->db->join('hendi_categories', 'hendi_categories.id = hendi_posts.category_id');

        return $this->db->get()->result();
    }

    public function JoinCategoryByID()
    {
        $id = $this->session->userdata('id');
        // $this->db->from('hendi_posts');
        $this->db->join('hendi_categories', 'hendi_categories.id = hendi_posts.category_id');
        return $this->db->get_where('hendi_posts', ["user_id" => $id])->result_array();
        // $data["posts"] = $this->db->get_where('hendi_posts', ["user_id" => $id])->result_array();
        // return $this->db->get()->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->title = $post["title"];
        $this->body = $post["body"];
        $this->category_id = 1;
        $this->user_id = $this->session->userdata('id');
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = $this->getById($post["id"]);
        // var_dump($post);
        // die;
        // $this->user_id = $post["user_id"];
        // $this->category_id = $post["category_id"];
        // $this->id = $post["id"];
        $data["title"] = $post["title"];
        $data["body"] = $post["body"];
        return $this->db->update($this->_table, $data, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}