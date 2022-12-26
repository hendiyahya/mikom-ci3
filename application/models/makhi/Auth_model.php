<?php

class Auth_model extends CI_Model
{
    public function tambah($data)
    {
        $this->db->insert('makhi_user', $data);
    }

    public function login($email)
    {
        $valid = $this->db->get_where('makhi_user', ['email' => $email])->row_array();

        return $valid;
    }
}
