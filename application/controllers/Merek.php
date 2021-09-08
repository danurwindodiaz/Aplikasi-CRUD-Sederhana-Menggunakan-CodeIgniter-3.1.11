<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->model('MerekModel', '', TRUE);
        $this->load->library('session');
    }

    public function index()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $data['data_merek'] = $this->MerekModel->getAll();
        $this->load->view('layout/header');
        $this->load->view('merek/data-merek', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $this->load->view('layout/header');
        $this->load->view('merek/tambah-merek');
        $this->load->view('layout/footer');
    }

    public function ubah($id)
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $data['data_merek'] = $this->MerekModel->getMerekById($id);
        $this->load->view('layout/header');
        $this->load->view('merek/ubah-merek', $data);
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        if ($this->form_validation->set_rules('namaMerek', 'namaMerek', 'required')->run() == FALSE) {
            redirect('/merek/tambah');
        } else {
            $data = array('namaMerek' => $this->input->post('namaMerek'));
            $this->MerekModel->insertData($data);
            redirect('/merek');
        }
    }

    public function update()
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        if ($this->form_validation->set_rules('namaMerek', 'namaMerek', 'required')->run() == FALSE) {
            redirect('/merek/ubah/' . $this->input->post('idMerek'));
        } else {
            $data = array(
                'idMerek' => $this->input->post('idMerek'),
                'namaMerek' => $this->input->post('namaMerek')
            );
            $this->MerekModel->updateData($data);
            redirect('/merek');
        }
    }

    public function delete($id)
    {
        if (empty($this->session->userdata('level')) || $this->session->userdata('level') == 'operator') {
            redirect('/login');
        }
        $this->MerekModel->deleteData($id);
        redirect('/kategori');
    }
}
