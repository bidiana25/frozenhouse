<?php
class PesananPembelianModel extends CI_Model
{

    public function select_pembelian()
    {
        $this->db->select('*');
        $this->db->from('pesanan_pembelian a');
        $this->db->join('barang b', 'a.barang=b.id_barang');
        $this->db->join('satuan_barang c', 'a.satuan=c.id_satuan');
        $this->db->join('supplier d', 'a.supplier=d.id_supplier');
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_pembelian_edit($id)
    {
        $this->db->select('*');
        $this->db->from('pesanan_pembelian');
        $this->db->where('id_pembelian', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('pesanan_pembelian', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_pembelian', $id);
        $this->db->delete('pesanan_pembelian');
    }

    public function updatedb($data, $id)
    {
        $this->db->where('id_pembelian', $id);
        return $this->db->update('pesanan_pembelian', $data);
    }
    public function select_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('pesanan_pembelian a');
        $this->db->join('barang b', 'a.barang=b.id_barang');
        $this->db->join('satuan_barang c', 'a.satuan=c.id_satuan');
        $this->db->join('supplier d', 'a.supplier=d.id_supplier');
        $this->db->where('a.id_pembelian', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_id_barang($id)
    {
        $this->db->select('*');
        $this->db->from('barang a');
        $this->db->join('kategori_barang b', 'a.kategori_barang=b.id_kategori');
        $this->db->join('satuan_barang c', 'a.satuan=c.id_satuan');
        $this->db->where('a.id_barang', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
}
