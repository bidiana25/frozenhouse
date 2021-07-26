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
        //CASH IN HAND


        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('template/backend/pages/hal_kategori_barang', $data); // load view home.php
    }
}
