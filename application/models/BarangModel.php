<?php
class BarangModel extends CI_Model
{

    public function select_barang()
    {
        $this->db->select('*');
        $this->db->from('barang a');
        $this->db->join('kategori_barang b', 'a.kategori_barang=b.id_kategori');
        $this->db->join('satuan_barang c', 'a.satuan=c.id_satuan');
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('barang', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('barang');
    }
    public function updatedb($data, $id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        return $this->db->update('barang', $data);
    }
    public function select_barang_edit($id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_barang_id($barang_id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang', $barang_id);
        $barang = $this->db->get();
        return $barang->result();
    }
}
