<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriBarang extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
    }

    public function index()
    {
        $data = [
            "kategori" => $this->KategoriModel->select_kategori(),
            "title" => "Kategori Barang",
        ];
        $this->render_backend('template/backend/pages/hal_kategori_barang', $data); // load view home.php
    }
    public function TambahKategori()
    {
        $data = [
            "title" => "Tambah Kategori Barang",
        ];
        $this->render_backend('template/backend/pages/add_kategori', $data); // load view home.php
    }
    public function Edit($id)
    {
        $data = [
            "kategori_edit" => $this->KategoriModel->select_kategori_edit($id),
            "title" => "Edit Kategori Barang",
        ];
        $this->render_backend('template/backend/pages/edit_kategori', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->KategoriModel->deletedb($id);
        redirect('/kategoriBarang');
    }
    public function addaction()
    {
        $data = array(
            'kode_kategori' => $this->input->post("kode_kategori"),
            'nama_kategori' => $this->input->post("nama_kategori")
        );

        $this->KategoriModel->insertdb($data);
        redirect('KategoriBarang');
    }
    public function editaction()
    {
        $id = $this->input->post("id_kategori");
        $kode_kategori = $this->input->post("kode_kategori");
        $nama_kategori = $this->input->post("nama_kategori");
        $data = array(
            'kode_kategori' => $kode_kategori,
            'nama_kategori' => $nama_kategori
        );
        $this->KategoriModel->updatedb($data, $id);
        redirect('/KategoriBarang');
    }
}
