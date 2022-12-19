<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hendi_account extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('hendi_users', $data);
	}
}
