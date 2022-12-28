<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_post extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
		$this->load->library('form_validation');
		$this->load->library('upload');
	}

	public function halaman_tambah() 
	{
		$this->load->view('ade_account/tambah_post');
	}

	public function fungsiTambah()
	{
	$data['username'] = $this->db->get_where('hendi_users', ['username' => $this->session->userdata('username')])->row_array();
	// echo 'Selamat datang ' . $data['username']['id_user'];
	// die;
	$this->form_validation->set_rules('Judul', 'judul', 'required|trim');
	$this->form_validation->set_rules('Waktu', 'waktu', 'required|trim');
	$this->form_validation->set_rules('Caption', 'caption', 'required|trim');



		if ($this->form_validation->run() == false) {
			$data['title'] = 'Create Post';
			$this->load->view('ade_account/tambah_post', $data);
			
		} else {
			$config = [
				'file_name' => time(), //ganti nama file jadi time
				'overwrite' => TRUE, //ubah nama file
				'max_width' => '2400', //maks panjang gambar (px)
				'max_height' => '1200', //maks tinggi gambar (px)
				'max_size' => '2400000', //maks ukuran gambar (byte)
				'allowed_types' => 'gif|png|jpg|jpeg', //type yang boleh diinput
				'upload_path' => 'assets/ade/img/' //tempat gambar akan disimpan
			];

			$this->upload->initialize($config);

			if (!$this->upload->do_upload('gambar')) { //error
				echo $this->upload->display_errors();
			} else {
				$image = $this->upload->data();
				$gambar = $image['file_name'];
			}
	
			$post = [
				'Judul' => $this->input->post('Judul', true),
				'Waktu' => $this->input->post('Waktu', true),
				'Caption' => $this->input->post('Caption', true),
				'Foto' => $gambar,
				'user_id' => $data['username']['id_user'],
				// 'datecreated' => date("Y/m/d h:i:sa", time())
			];

			$this->Ade_post->insertDataPengabdian($post);	

			redirect('ade_controllers/Dashboard');
		
		}
	}
}	



// 	{

// 		$ID = $this->input->post('ID');
// 		$Judul = $this->input->post('Judul');
// 		$Waktu = $this->input->post('Waktu');
// 		$Caption = $this->input->post('Caption');
// 		$id = $this->session->userdata('id');
 
// 		$config = [
//                 'file_name' => time(), //ganti nama file jadi time
//                 'overwrite' => TRUE, //ubah nama file
//                 'max_width' => '1200', //maks panjang gambar (px)
//                 'max_height' => '900', //maks tinggi gambar (px)
//                 'max_size' => '2400000', //maks ukuran gambar (byte)
//                 'allowed_types' => 'gif|png|jpg|jpeg', //type yang boleh diinput
//                 'upload_path' => 'assets/img' //tempat gambar akan disimpan
//             ];
 
//             $this->upload->initialize($config);
 
//             if (!$this->upload->do_upload('gambar')) { //kalo error
//                 echo $this->upload->display_errors();
//             } else {
//                 $image = $this->upload->data();
//                 $gambar = $image['file_name'];
//             }

// 		// $Foto = $_FILES['Foto'];
// 		// if ($Foto=''){}else 
// 		// {
// 		// 	$config = array(
// 		// 	'upload_path' => "assets/img/",
// 		// 	'allowed_types' => "gif|jpg|png|jpeg|pdf",
// 		// 	'overwrite' => TRUE,
// 		// 	'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
// 		// 	'max_height' => "768",
// 		// 	'max_width' => "1024"
// 		// 	);
// 		//   	// $config['upload_path']          = 
//         //   	// $config['allowed_types']        = 'gif|jpg|png';
//         //     // $config['max_size']             = 100;
//         //     // $config['max_width']            = 1024;
//         //     // $config['max_height']           = 768;


//         //     // $config['upload_path'] = './assets/img/';
// 		// 	// $config['allowed_types'] = 'gif|jpg|png';
// 		// 	// 'overwrite' => TRUE,
// 		// 	// $config['max_size']     = '2048000';
// 		// 	// $config['max_width'] = '1024';
// 		// 	// $config['max_height'] = '768';


//         //     $this->load->library('upload', $config);

//         //     if ( ! $this->upload->do_upload('userfile'))
//         //     {
//         //         $error = array('error' => $this->upload->display_errors());

//         //         $this->load->view('ade_account/tambah_post', $error);
//         //     }
//         //     else
//         //     {
//         //         $data = array('upload_data' => $this->upload->data());

//         //         $this->load->view('ade_account/dashboard', $data);
//         //     }

// 		// }

// 		$ArrInsert = array(
// 			'ID' => $ID,
// 			'Judul' => $Judul,
// 			'Waktu' => $Waktu,
// 			'Caption' => $Caption,
// 			'Foto' => $gambar,
// 			'user_id' => $id
// 		);

// 
// 		redirect(base_url('index.php/ade_controllers/Dashboard'));
// 	}
// }