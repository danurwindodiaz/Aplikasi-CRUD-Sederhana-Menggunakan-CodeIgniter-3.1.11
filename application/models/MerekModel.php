<?php defined('BASEPATH') or exit('No direct script access allowed');

class MerekModel extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('merek');
        return $query->result_array();
    }

    public function getMerekById($id)
    {
        return $this->db->get_where('merek', ['idMerek' => $id])->row_array();
    }

    public function insertData($data)
    {
        $this->db->insert('merek', $data);
    }

    public function updateData($data)
    {
        $this->db->replace('merek', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('idMerek', $id);
        $this->db->delete('merek');
    }
}
