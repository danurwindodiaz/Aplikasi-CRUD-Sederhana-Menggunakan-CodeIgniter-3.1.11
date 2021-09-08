<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->model('AdminModel', '', TRUE);
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->AdminModel->getAdminByUser($username);

        if (empty($user)) {
            $this->session->set_userdata('gagal', 'Username atau password salah');
            redirect('/login');
        }
        if ($user['password'] != $password) {
            $this->session->set_userdata('gagal', 'Username atau password salah');
            redirect('/login');
        }

        $this->session->set_userdata('username', $username);
        $this->session->set_userdata('level', $user['level']);

        redirect('/home');
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('gagal');

        redirect('/login');
    }
}
