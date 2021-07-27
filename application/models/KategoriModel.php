<?php
class KategoriModel extends CI_Model
{

    public function select_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori_barang');
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_kategori_edit($id)
    {
        $this->db->select('*');
        $this->db->from('kategori_barang');
        $this->db->where('id_kategori', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('kategori_barang', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori_barang');
    }

    public function updatedb($data, $id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori_barang', $data);
    }
}
