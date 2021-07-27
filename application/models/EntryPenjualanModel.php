<?php
class EntryPenjualanModel extends CI_Model
{

    public function select_penjualan()
    {
        $this->db->select('*');
        $this->db->from('entry_penjualan a');
        $this->db->join('barang b', 'a.barang=b.id_barang');
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_by_date($from_date, $to_date)
    {
        $this->db->select('*');
        $this->db->from('entry_penjualan a');
        $this->db->join('barang b', 'a.barang=b.id_barang');
        $this->db->where("a.tanggal_penjualan<='{$to_date}' and a.tanggal_penjualan>='{$from_date}'");
        $barang = $this->db->get();
        return $barang->result();
    }
    public function select_penjualan_edit($id)
    {
        $this->db->select('*');
        $this->db->from('entry_penjualan');
        $this->db->where('id_penjualan', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('entry_penjualan', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_penjualan', $id);
        $this->db->delete('entry_penjualan');
    }

    public function updatedb($data, $id)
    {
        $this->db->where('id_penjualan', $id);
        return $this->db->update('entry_penjualan', $data);
    }
}
