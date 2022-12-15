<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hendi_categories extends CI_Model
{
    private $_table = "hendi_categories";

    public $id;
    public $name;
    public $slug;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }
    
}