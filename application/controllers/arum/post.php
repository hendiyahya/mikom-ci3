<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class post extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        // $this->load->model("hendi_post");
        // $this->hendi_login->cek_login(); 
        $this->load->model("arum/arum_home"); // panggil model arum
    }  

    //Load Halaman dashboard
    public function index() {  
        // $data["posts"] = $this->arum_home->ambilsemuadata()->result_array();
        $this->load->view("Arum/create"); 
        
    }


    public function tambahdata() {  

        //masukin variable
        $data=[
            'nama' => $this->input->post('nama'),
            'gambar' => null,
            'ket' => $this->input->post('ket'),
            'user_id' => $this->session->userdata('id')
        ];

        // panggil dan pake model buat insert ke database
        $this->arum_home->insertdata($data);
        redirect("arum/Home/dashboard");// udh nambahin data pindah ke dasboard

    }

    public function updatedata($id) {  
        //Panggil satu data
        $data = $this->arum_home->ambilsatudata($id);//ambil data di table semuai id

        //masukin variable
        $post=[
            'nama' => $this->input->post('nama'),
            'gambar' => $this->input->post('gambar'),
            'ket' => $this->input->post('ket')
            
        ];

        $data['nama'] = $post['nama'];
        $data['gambar'] = $post['gambar'];
        $data['ket'] = $post['ket'];



        // panggil dan pake model buat insert ke database
        $this->db->update('nenden_artikel', $data, ['id' => $id]);
        redirect("arum/Home/dashboard");// udh nambahin data pindah ke dasboard

    }

    public function hapus($id) {  // untuk hapus data
        

        $this->arum_home->deletedata($id);
        redirect("arum/Home/dashboard");

        
    }

    public function edit($id) {  // untuk edit data
        $data["post"] = $this->arum_home->ambilsatudata($id);//ambil data di table semuai id
        $this->load->view("Arum/edit",$data); 


        
    }



    public function detail($id) {  // untuk detail artikel
       
        $data["post"] = $this->arum_home->ambilsatudata($id);//ambil data di table semuai id
        // var_dump($data);
        

        $this->load->view("Arum/detail",$data); // arahin ke view detail


        
    }






}  
