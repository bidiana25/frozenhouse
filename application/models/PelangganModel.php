<?php
class pelangganModel extends CI_Model
{

    public function select_pelanggan()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $pelanggan = $this->db->get();
        return $pelanggan->result();
    }
    public function select_pelanggan_edit($id)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('pelanggan', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }

    public function updatedb($data, $id)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->update('pelanggan', $data);
    }
}
