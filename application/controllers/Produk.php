<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->model('ProdukModel', '', TRUE);
        $this->load->model('MerekModel', '', TRUE);
        $this->load->model('KategoriModel', '', TRUE);
        $this->load->library('session');
    }

    public function index()
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $data['data_produk'] = $this->ProdukModel->getAll();
        $data['merek'] = $this->MerekModel->getAll();
        $data['kategori'] = $this->KategoriModel->getAll();
        $this->load->view('layout/header');
        $this->load->view('produk/data-produk', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $data['merek'] = $this->MerekModel->getAll();
        $data['kategori'] = $this->KategoriModel->getAll();
        $this->load->view('layout/header');
        $this->load->view('produk/tambah-produk', $data);
        $this->load->view('layout/footer');
    }

    public function ubah($id)
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $data['merek'] = $this->MerekModel->getAll();
        $data['kategori'] = $this->KategoriModel->getAll();
        $data['produk'] = $this->ProdukModel->getProdukById($id);
        $this->load->view('layout/header');
        $this->load->view('produk/ubah-produk', $data);
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $this->form_validation->set_rules('namaProduk', 'namaProduk', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        $config['upload_path']  = './assets/images/produk/';
        $config['allowed_types']        = 'jpg|png|';
        $config['max_size']             = 500;
        $config['max_width']            = 2048;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('foto', $error['error']);
            return $error;
        }

        if ($this->form_validation->run() == FALSE) {
            redirect('/produk/tambah');
        } else {
            $data = array(
                'namaProduk' => $this->input->post('namaProduk'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'idKategori' => $this->input->post('kategori'),
                'idMerek' => $this->input->post('merek'),
                'status' => $this->input->post('status'),
                'foto' => $_FILES['foto']['name']
            );
            $this->ProdukModel->insertData($data);
            redirect('/produk');
        }
    }

    public function update()
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $this->form_validation->set_rules('namaProduk', 'namaProduk', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        $fotolama = $this->input->post('fotolama');

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']  = './assets/images/produk/';
            $config['allowed_types']        = 'jpg|png|';
            $config['max_size']             = 500;
            $config['max_width']            = 2048;
            $config['max_height']           = 1000;

            $this->load->library('upload', $config);

            $this->upload->do_upload('foto');

            $path = './assets/images/produk/' . $fotolama;
            unlink($path);

            $namafoto = $_FILES['foto']['name'];
        } else {
            $namafoto = $this->input->post('fotolama');
        }

        if ($this->form_validation->run() == FALSE) {
            redirect('/produk/ubah/' . $this->input->post('idProduk'));
        } else {
            $data = array(
                'idProduk' => $this->input->post('idProduk'),
                'namaProduk' => $this->input->post('namaProduk'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'idKategori' => $this->input->post('kategori'),
                'idMerek' => $this->input->post('merek'),
                'status' => $this->input->post('status'),
                'foto' => $namafoto
            );
            $this->ProdukModel->updateData($data);
            redirect('/produk');
        }
    }

    public function delete($id, $foto)
    {
        if (empty($this->session->userdata('level'))) {
            redirect('/login');
        }
        $this->ProdukModel->deleteData($id);
        $path = './assets/images/produk/' . $foto;
        unlink($path);
        redirect('/produk');
    }
}
