<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_post extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
		$this->load->library('upload');
	}

	public function halaman_edit($ID)
	{
		$data['post'] = $this->Ade_post->getDataPengabdianDetail($ID);
		$this->load->view('ade_account/edit_post', $data);
	}

	
	public function fungsiEdit($ID)
	{
		$data['post'] = $this->Ade_post->getDataPengabdianDetail($ID);

		$this->form_validation->set_rules('Judul', 'judul', 'required|trim');
		$this->form_validation->set_rules('Waktu', 'waktu', 'required|trim');
		$this->form_validation->set_rules('Caption', 'caption', 'required|trim');

        if ($this->form_validation->run() == false) {
			$data['title'] = 'Edit Post';
			$this->load->view('ade_account/edit_post', $data);
        } else {
            $config = [
                'file_name' => time(), //ganti nama file jadi time
                'overwrite' => TRUE, //ubah nama file
				// 'max_width' => '2400', //maks panjang gambar (px)
				// 'max_height' => '1200', //maks tinggi gambar (px)
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
            // var_dump($gambar);
            // die;
            $this->Ade_post->editPost($ID, $gambar);
            redirect('ade_controllers/Dashboard');
        }	
		// $ID = $this->input->post('ID');
		// $Judul = $this->input->post('Judul');
		// $Waktu = $this->input->post('Waktu');
		// $Caption = $this->input->post('Caption');
		// // $Foto = $_FILES['Foto'];
		// // if ($Foto=''){}else{
		// // 	$config['upload_path']  = './assets/img';
		// // 	$config['allow_types']  = 'jpg|png|gif';

		// // 	$this->load->library('upload', $config);
		// // 	if(!$this->upload->do_while('Foto')){
		// // 		echo "Upload Gagal"; die();
		// // 	}else{
		// // 		$Foto=$this->upload->data('file_name');
		// // 	}
		// // }

		// $ArrUpdate = array(
		// 	'ID' => $ID,
		// 	'Judul' => $Judul,
		// 	'Waktu' => $Waktu,
		// 	'Caption' => $Caption
		// 	// 'Foto' => $Foto
		// );

		// $this->Ade_post->updateDataPengabdian($ID, $ArrUpdate);
		// redirect(base_url('index.php/ade_controllers/Dashboard'));
	}
}	