<?php
class SupplierModel extends CI_Model
{

    public function select_supplier()
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $supplier = $this->db->get();
        return $supplier->result();
    }
    public function select_supplier_edit($id)
    {
        $this->db->select('*');
        $this->db->from('supplier');
        $this->db->where('id_supplier', $id);
        $barang = $this->db->get();
        return $barang->result();
    }
    function insertdb($data)
    {
        $this->db->insert('supplier', $data);
        return TRUE;
    }

    public function deletedb($id)
    {
        $this->db->where('id_supplier', $id);
        $this->db->delete('supplier');
    }

    public function updatedb($data, $id)
    {
        $this->db->where('id_supplier', $id);
        return $this->db->update('supplier', $data);
    }
}
