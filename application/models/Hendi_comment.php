<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hendi_comment extends CI_Model
{
    private $_table = "hendi_comments";

    public $id;
    public $user_id;
    public $post_id;
    public $parent_id;
    public $body;

    public function rules()
    {
        return [
            
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
        $this->db->from('hendi_comments');
        $this->db->join('hendi_users', 'hendi_users.id_user = hendi_comments.user_id');

        return $this->db->get()->result();
    }


    public function save()
    {
        $comment = $this->input->post();
        $this->body = $comment["body"];
        $this->post_id = $comment["post_id"];
        $this->user_id = $this->session->userdata('id');
        return $this->db->insert($this->_table, $this);
    }

}