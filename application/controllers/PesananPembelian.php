<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PesananPembelian extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesananPembelianModel');
        $this->load->model('BarangModel');
    }

    public function index()
    {
        $data = [
            "pembelian" => $this->PesananPembelianModel->select_pembelian(),
            "title" => "Data Pesanan Pembelian",
        ];
        $this->render_backend('template/backend/pages/hal_pesananpembelian', $data); // load view home.php
    }
    public function TambahPembelian()
    {
        $data = [
            "title" => "Tambah Data Pesanan Pembelian",
        ];
        $this->render_backend('template/backend/pages/add_pesananpembelian', $data); // load view home.php
    }
    public function Edit($id)
    {
        $data = [
            "pembelian_edit" => $this->PesananPembelianModel->select_pembelian_edit($id),
            "title" => "Edit Data Pesanan Pembelian",
        ];
        $this->render_backend('template/backend/pages/edit_pesananpembelian', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->PesananPembelianModel->deletedb($id);
        redirect('/PesananPembelian');
    }
    public function addaction()
    {
        $data = array(
            'nomor_po' => $this->input->post("nomor_po"),
            'supplier' => $this->input->post("supplier"),
            'tanggal_pembelian' => $this->input->post("tanggal_pembelian"),
            'barang' => $this->input->post("barang"),
            'satuan' => $this->input->post("satuan"),
            'kuantitas' => $this->input->post("kuantitas")
        );

        $this->PesananPembelianModel->insertdb($data);
        redirect('PesananPembelian');
    }
    public function editaction()
    {
        $id = $this->input->post("id_pembelian");
        $nomor_po = $this->input->post("nomor_po");
        $supplier = $this->input->post("supplier");
        $tanggal_pembelian = $this->input->post("tanggal_pembelian");
        $barang = $this->input->post("barang");
        $satuan = $this->input->post("satuan");
        $kuantitas = $this->input->post("kuantitas");
        $data = array(
            'nomor_po' => $nomor_po,
            'supplier' => $supplier,
            'tanggal_pembelian' => $tanggal_pembelian,
            'barang' => $barang,
            'satuan' => $satuan,
            'kuantitas' => $kuantitas
        );
        $this->PesananPembelianModel->updatedb($data, $id);
        redirect('/PesananPembelian');
    }
    public function terima($id)
    {
        //$id = $this->input->get("id_pembelian");
        $tanggal_penerimaan = date("Y-m-d");
        $data = array(
            'tanggal_penerimaan' => $tanggal_penerimaan
        );
        $this->PesananPembelianModel->updatedb($data, $id);


        $read_select = $this->PesananPembelianModel->select_by_id($id);
        foreach ($read_select as $key => $value) {
            $kuantitas = $value->kuantitas;
            $barang_id = $value->barang;
        }
        $read_select = $this->BarangModel->select_barang_id($barang_id);
        foreach ($read_select as $key => $value) {
            $jumlah = $value->stok_barang;
            $barang_id = $value->id_barang;
        }
        $hasil = $jumlah + $kuantitas;
        $data = array(
            'stok_barang' => $hasil
        );
        $this->BarangModel->updatedb($data, $barang_id);

        redirect('/PesananPembelian');
    }
}
