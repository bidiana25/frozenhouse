<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EntryPenjualan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EntryPenjualanModel');
    }

    public function index()
    {
        $data = [
            "penjualan" => $this->EntryPenjualanModel->select_penjualan(),
            "title" => "Data Penjualan",
        ];
        $this->render_backend('template/backend/pages/hal_entrypenjualan', $data); // load view home.php
    }
    public function TambahPenjualan()
    {
        $data = [
            "title" => "Tambah Data Penjualan",
        ];
        $this->render_backend('template/backend/pages/add_entrypenjualan', $data); // load view home.php
    }
    public function Edit($id)
    {
        $data = [
            "penjualan_edit" => $this->EntryPenjualanModel->select_penjualan_edit($id),
            "title" => "Edit Data Penjualan",
        ];
        $this->render_backend('template/backend/pages/edit_entrypenjualan', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->EntryPenjualanModel->deletedb($id);
        redirect('/EntryPenjualan');
    }
    public function addaction()
    {
        $data = array(
            'barang' => $this->input->post("barang"),
            'harga_jual' => $this->input->post("harga_jual"),
            'jumlah' => $this->input->post("jumlah"),
            'tanggal_penjualan' => $this->input->post("tanggal_penjualan")

        );

        $this->EntryPenjualanModel->insertdb($data);
        redirect('EntryPenjualan');
    }
    public function editaction()
    {
        $id = $this->input->post("id_penjualan");
        $barang = $this->input->post("barang");
        $harga_jual = $this->input->post("harga_jual");
        $jumlah = $this->input->post("jumlah");
        $tanggal_penjualan = $this->input->post("tanggal_penjualan");
        $data = array(
            'barang' => $barang,
            'harga_jual' => $harga_jual,
            'jumlah' => $jumlah,
            'tanggal_penjualan' => $tanggal_penjualan
        );
        $this->EntryPenjualanModel->updatedb($data, $id);
        redirect('/EntryPenjualan');
    }
}
