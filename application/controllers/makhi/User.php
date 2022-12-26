<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('hendi_users', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('makhi/dashboard/layouts/header', $data);
        $this->load->view('makhi/dashboard/layouts/sidebar', $data);
        $this->load->view('makhi/dashboard/index');
        $this->load->view('makhi/dashboard/layouts/footer');
        // echo 'Selamat datang ' . $data['user']['name'];
    }
}
