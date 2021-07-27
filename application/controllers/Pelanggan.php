<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PelangganModel');
    }

    public function index()
    {
        $data = [
            "pelanggan" => $this->PelangganModel->select_pelanggan(),
            "title" => "Pelanggan",
        ];
        $this->render_backend('template/backend/pages/hal_pelanggan', $data); // load view home.php
    }
    public function TambahPelanggan()
    {
        $data = [
            "title" => "Tambah Pelanggan",
        ];
        $this->render_backend('template/backend/pages/add_Pelanggan', $data); // load view home.php
    }
    public function Edit($id)
    {
        $data = [
            "pelanggan_edit" => $this->PelangganModel->select_pelanggan_edit($id),
            "title" => "Edit Pelanggan",
        ];
        $this->render_backend('template/backend/pages/edit_Pelanggan', $data); // load view home.php
    }
    public function delete($id)
    {
        $this->PelangganModel->deletedb($id);
        redirect('/Pelanggan');
    }
    public function addaction()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post("nama_pelanggan"),
            'nohp_pelanggan' => $this->input->post("nohp_pelanggan"),
            'alamat_pelanggan' => $this->input->post("alamat_pelanggan")
        );

        $this->PelangganModel->insertdb($data);
        redirect('Pelanggan');
    }
    public function editaction()
    {
        $id = $this->input->post("id_pelanggan");
        $nama_pelanggan = $this->input->post("nama_pelanggan");
        $nohp_pelanggan = $this->input->post("nohp_pelanggan");
        $alamat_pelanggan = $this->input->post("alamat_pelanggan");
        $data = array(
            'nama_pelanggan' => $nama_pelanggan,
            'nohp_pelanggan' => $nohp_pelanggan,
            'alamat_pelanggan' => $alamat_pelanggan
        );
        $this->PelangganModel->updatedb($data, $id);
        redirect('/Pelanggan');
    }
}
