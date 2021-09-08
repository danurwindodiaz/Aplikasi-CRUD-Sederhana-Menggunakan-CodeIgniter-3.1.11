<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->model('KategoriModel', '', TRUE);
        $this->load->library('session');
    }

    public function index()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $data['data_kategori'] = $this->KategoriModel->getAll();
        $this->load->view('layout/header');
        $this->load->view('kategori/data-kategori', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $this->load->view('layout/header');
        $this->load->view('kategori/tambah-kategori');
        $this->load->view('layout/footer');
    }

    public function ubah($id)
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $data['data_kategori'] = $this->KategoriModel->getKategoriById($id);
        $this->load->view('layout/header');
        $this->load->view('kategori/ubah-kategori', $data);
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        if ($this->form_validation->set_rules('namaKategori', 'namaKategori', 'required')->run() == FALSE) {
            redirect('/kategori/tambah');
        } else {
            $data = array('namaKategori' => $this->input->post('namaKategori'));
            $this->KategoriModel->insertData($data);
            redirect('/kategori');
        }
    }

    public function update()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        if ($this->form_validation->set_rules('namaKategori', 'namaKategori', 'required')->run() == FALSE) {
            redirect('/kategori/ubah/' . $this->input->post('idKategori'));
        } else {
            $data = array(
                'idKategori' => $this->input->post('idKategori'),
                'namaKategori' => $this->input->post('namaKategori')
            );
            $this->KategoriModel->updateData($data);
            redirect('/kategori');
        }
    }

    public function delete($id)
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $this->KategoriModel->deleteData($id);
        redirect('/kategori');
    }
}
