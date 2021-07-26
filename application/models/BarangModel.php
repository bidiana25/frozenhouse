<?php
class BarangModel extends CI_Model
{

    public function select_barang()
    {
        $this->db->select('*');
        $this->db->from('barang a');
        $this->db->join('kategori_barang b', 'a.id_barang=b.id_kategori');
        $this->db->join('satuan_barang c', 'a.id_barang=c.id_satuan');
        $barang = $this->db->get();
        return $barang->result();
    }
    function tambah($data)
    {
        $this->db->insert('t_m_akun2', $data);
        return TRUE;
    }

    public function delete($id)
    {
        $this->db->where('id_akun2', $id);
        $this->db->delete('t_m_akun2');
    }

    public function update_akun($data, $id)
    {
        $this->db->where('id_akun2', $id);
        return $this->db->update('t_m_akun2', $data);
    }
}
