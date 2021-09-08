<?php defined('BASEPATH') or exit('No direct script access allowed');

class ProdukModel extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('produk', ['idProduk' => $id])->row_array();
    }

    public function insertData($data)
    {
        $this->db->insert('produk', $data);
    }

    public function updateData($data)
    {
        $this->db->replace('produk', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('idProduk', $id);
        $this->db->delete('produk');
    }
}
