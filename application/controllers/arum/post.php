<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class post extends CI_Controller {  
    function __construct(){  
        parent::__construct();  
        // $this->load->model("hendi_post");
        // $this->hendi_login->cek_login(); 
        $this->load->model("arum/arum_home"); // panggil model arum
        $this->load->library("upload");
    }  

    //Load Halaman dashboard
    public function index() {  
        // $data["posts"] = $this->arum_home->ambilsemuadata()->result_array();
        $this->load->view("Arum/create"); 
        
    }


    public function tambahdata() {  

         
        $config = [
            'file_name' => time(), //ganti nama file jadi time
            'overwrite' => TRUE, //ubah nama file
            'max_width' => '1200', //maks panjang gambar (px)
            'max_height' => '900', //maks tinggi gambar (px)
            'max_size' => '2400000', //maks ukuran gambar (byte)
            'allowed_types' => 'gif|png|jpg|jpeg', //type yang boleh diinput
            'upload_path' => 'assets/arum/img' //tempat gambar akan disimpan
        ];

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('gambar')) { //kalo error
            // echo $this->upload->display_errors();
        } else {
            $image = $this->upload->data();
            $gambar = $image['file_name'];
        }

        //masukin variable
        $data=[
            'nama' => $this->input->post('nama'),
            'gambar' => $gambar,
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
