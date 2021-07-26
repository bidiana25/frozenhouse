<?php
class PelangganModel extends CI_Model
{

    public function select_pelanggan()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $pelanggan = $this->db->get();
        return $pelanggan->result();
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
