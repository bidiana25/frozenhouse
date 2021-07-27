<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SatuanBarang extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SatuanModel');
    }

    public function index()
    {
        $data = [
            "satuan" => $this->SatuanModel->select_satuan(),
            "title" => "Satuan Barang",
        ];
        $this->render_backend('template/backend/pages/hal_satuan_barang', $data); // load view home.php
    }
    public function TambahSatuan()
    {
        $data = [
            "title" => "Tambah Satuan Barang",
        ];
        $this->render_backend('template/backend/pages/add_satuan', $data); // load view home.php
    }
    public function Edit($id)
    {
        $data = [
            "satuan_edit" => $this->SatuanModel->select_satuan_edit($id),
            "title" => "Edit Satuan Barang",
        ];
        $this->render_backend('template/backend/pages/edit_satuan', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->SatuanModel->deletedb($id);
        redirect('/SatuanBarang');
    }
    public function addaction()
    {
        $data = array(
            'nama' => $this->input->post("nama")
        );

        $this->SatuanModel->insertdb($data);
        redirect('SatuanBarang');
    }
    public function editaction()
    {
        $id = $this->input->post("id_satuan");
        $nama = $this->input->post("nama");
        $data = array(
            'nama' => $nama
        );
        $this->SatuanModel->updatedb($data, $id);
        redirect('/SatuanBarang');
    }
}
