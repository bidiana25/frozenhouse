<?php
class SatuanModel extends CI_Model
{

    public function select_satuan()
    {
        $this->db->select('*');
        $this->db->from('satuan_barang');
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_satuan_edit($id)
    {
        $this->db->select('*');
        $this->db->from('satuan_barang');
        $this->db->where('id_satuan', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('satuan_barang', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_satuan', $id);
        $this->db->delete('satuan_barang');
    }

    public function updatedb($data, $id)
    {
        $this->db->where('id_satuan', $id);
        return $this->db->update('satuan_barang', $data);
    }
}
