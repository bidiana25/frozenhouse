<?php
class DashboardModel extends CI_Model
{

    public function select_penjualan()
    {
        $this->db->select('*');
        $this->db->from('entry_penjualan a');
        $this->db->join('barang b', 'a.barang=b.id_barang');
        $barang = $this->db->get();
        return $barang->result();
    }
    public function hitungjumlahtransaksi()
    {
        $this->db->select('id_penjualan');
        $this->db->from('entry_penjualan');
        $this->db->distinct();
        return $this->db->count_all_results();
    }
    public function hitungjumlahcustomer()
    {
        $this->db->select('id_pelanggan');
        $this->db->from('pelanggan');
        $this->db->distinct();
        return $this->db->count_all_results();
    }
    public function hitungjumlahbarang()
    {
        $this->db->select('id_barang');
        $this->db->from('barang');
        $this->db->distinct();
        return $this->db->count_all_results();
    }
    public function hitungjumlahbeli()
    {
        $this->db->select('id_pembelian');
        $this->db->from('pesanan_pembelian');
        $this->db->distinct();
        return $this->db->count_all_results();
    }
    public function select_barang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('stok_barang<4');
        $barang = $this->db->get();
        return $barang->result();
    }
}
