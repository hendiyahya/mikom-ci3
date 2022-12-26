?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Ade_post');
	}

	public function halaman_detail($ID)
	{
		var_dump($ID);
		die;
		$queryPengabdianDetail = $this->Ade_post->getDataPengabdianDetail($ID);
		$data = array('queryNgabdiDetail' => $queryPengabdianDetail);
		$this->load->view('ade_account/detail_post', $data);
	}


}