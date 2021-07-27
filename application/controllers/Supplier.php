<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SupplierModel');
    }

    public function index()
    {
        $data = [
            "supplier" => $this->SupplierModel->select_supplier(),
            "title" => "Supplier",
        ];
        $this->render_backend('template/backend/pages/hal_supplier', $data); // load view home.php
    }
    public function TambahSupplier()
    {
        $data = [
            "title" => "Tambah Supplier",
        ];
        $this->render_backend('template/backend/pages/add_supplier', $data); // load view home.php
    }
    public function Edit($id)
    {
        $data = [
            "supplier_edit" => $this->SupplierModel->select_supplier_edit($id),
            "title" => "Edit Supplier",
        ];
        $this->render_backend('template/backend/pages/edit_supplier', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->SupplierModel->deletedb($id);
        redirect('/Supplier');
    }
    public function addaction()
    {
        $data = array(
            'nama_supplier' => $this->input->post("nama_supplier"),
            'no_hp' => $this->input->post("no_hp"),
            'alamat' => $this->input->post("alamat")
        );

        $this->SupplierModel->insertdb($data);
        redirect('Supplier');
    }
    public function editaction()
    {
        $id = $this->input->post("id_supplier");
        $nama_supplier = $this->input->post("nama_supplier");
        $no_hp = $this->input->post("no_hp");
        $alamat = $this->input->post("alamat");
        $data = array(
            'nama_supplier' => $nama_supplier,
            'no_hp' => $no_hp,
            'alamat' => $alamat
        );
        $this->SupplierModel->updatedb($data, $id);
        redirect('/Supplier');
    }
}
