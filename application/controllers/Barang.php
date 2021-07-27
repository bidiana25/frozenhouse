<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BarangModel');
    }

    public function index()
    {
        $data = [
            "Barang" => $this->BarangModel->select_barang(),
            "title" => "Barang",
        ];

        $this->render_backend('template/backend/pages/hal_barang', $data); // load view home.php
    }
    public function TambahBarang()
    {
        $data = [
            "title" => "Tambah Barang",
        ];
        $this->render_backend('template/backend/pages/add_barang', $data);
    }
    public function insert()
    {
        $data = array(
            'nama_barang' => $this->input->post("nama_barang"),
            'harga' => $this->input->post("harga"),
            'satuan' => $this->input->post("satuan"),
            'kategori_barang' => $this->input->post("kategori_barang"),
            'stok_barang' => $this->input->post("stok_barang")
        );

        $this->BarangModel->insertdb($data);
        $this->session->set_flashdata('notif', '<div class="alert alert-info icons-alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="icofont icofont-close-line-circled"></i></button><p><strong>Data Beban Berhasil Ditambahkan!</strong></p></div>');
        redirect('Barang');
    }
    public function Edit($id)
    {
        $data = [
            "barang_edit" => $this->BarangModel->select_barang_edit($id),
            "title" => "Edit Barang",
        ];
        $this->render_backend('template/backend/pages/edit_barang', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->BarangModel->deletedb($id);
        redirect('/Barang');
    }
    public function editaction()
    {
        $id_barang = $this->input->post("id_barang");
        $nama_barang = $this->input->post("nama_barang");
        $harga = $this->input->post("harga");
        $satuan = $this->input->post("satuan");
        $kategori_barang = $this->input->post("kategori_barang");
        $stok_barang = $this->input->post("stok_barang");
        $data = array(
            'nama_barang' => $nama_barang,
            'harga' => $harga,
            'satuan' => $satuan,
            'kategori_barang' => $kategori_barang,
            'stok_barang' => $stok_barang
        );
        $this->BarangModel->updatedb($data, $id_barang);
        redirect('/Barang');
    }
}
