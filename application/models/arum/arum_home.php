<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class arum_home extends CI_Model{
	function ambilsemuadata()
	{
	 return	$this->db->get('nenden_artikel'); // ngambil data di table nenden_artikel
        
	}

    function insertdata($data)
	{
        $this->db->insert('nenden_artikel', $data);
        
	}

    function deletedata($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('nenden_artikel');
        
	}

    function ambilsatudata($id)
	{
       return $this->db->get_where('nenden_artikel', array('id' => $id))->row_array();           
        
	}


    

    
}


