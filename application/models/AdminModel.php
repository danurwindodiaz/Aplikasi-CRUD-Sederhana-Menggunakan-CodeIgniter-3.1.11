<?php defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }

    public function getAdminByUser($user)
    {
        return $this->db->get_where('admin', ['username' => $user])->row_array();
    }
}
