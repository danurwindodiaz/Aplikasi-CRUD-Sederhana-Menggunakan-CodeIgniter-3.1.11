<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('ProdukModel', '', TRUE);
        $this->load->model('MerekModel', '', TRUE);
        $this->load->model('KategoriModel', '', TRUE);
    }

    public function index()
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $data['produk'] = $this->ProdukModel->getAll();
        $data['merek'] = $this->MerekModel->getAll();
        $data['kategori'] = $this->KategoriModel->getAll();
        $this->load->view('layout/header');
        $this->load->view('dashboard', $data);
        $this->load->view('layout/footer');
    }
}
