<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Home extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        // $this->load->model("hendi_post");
        // $this->hendi_login->cek_login(); 
        $this->load->model("arum/arum_home"); // panggil model arum
        
    }  

    // manggil home
    public function index() {
        
        if(!isset($_SESSION["username"])){
            //alihkan ke halaman login
			redirect(site_url('login'));
        }

        
        $data["posts"] = $this->arum_home->ambilsemuadata()->result_array();// manggil model untuk ngambil data
        $this->load->view("Arum/AKemahasiswaan",$data); 
    }

    //manggil dashboard
    public function dashboard() { 
        $data["posts"] = $this->arum_home->ambildatauser();// manggil model untuk ngambil data
       
        $this->load->view("Arum/ADashboard",$data);
    }

}  
