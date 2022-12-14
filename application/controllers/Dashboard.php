<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Dashboard extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        $this->load->model("hendi_post");
        $this->hendi_login->cek_login();  
    }  

    //Load Halaman dashboard
    public function index() {  
        $data["posts"] = $this->hendi_post->getAll();
        $this->load->view('hendi_account/v_dashboard',$data);  
    }
}  
