<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('makhi/Auth_model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('makhi/templates/headerauth', $data);
            $this->load->view('makhi/auth/login');
            $this->load->view('makhi/templates/footerauth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->Auth_model->login($email);

        if ($user) {
            // usernya ada
            if ($password == $user['password']) {
                //cek password
                $data = [
                    'email' => $user['email'],
                    'name' => $user['name']
                ];

                $this->session->set_userdata($data);

                redirect('makhi/user');
            } else {
                $this->session->set_flashdata('success', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('makhi/auth');
            }
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger" role="alert">Email not registered</div>');

            redirect('makhi/auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Register';
            $this->load->view('makhi/templates/headerauth', $data);
            $this->load->view('makhi/auth/register');
            $this->load->view('makhi/templates/footerauth');
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('password'),
                'username' => NULL,
                'id_role' => 1,
                'created' => date("Y/m/d h:i:sa", time())
            ];

            $this->Auth_model->tambah($data);

            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Account has been created. Please Login</div>');

            redirect('makhi/auth');
        }
    }
}
