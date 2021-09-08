<?php defined('BASEPATH') or exit('No direct script access allowed');

class KategoriModel extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori', ['idKategori' => $id])->row_array();
    }

    public function insertData($data)
    {
        $this->db->insert('kategori', $data);
    }

    public function updateData($data)
    {
        $this->db->replace('kategori', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('idKategori', $id);
        $this->db->delete('kategori');
    }
}
