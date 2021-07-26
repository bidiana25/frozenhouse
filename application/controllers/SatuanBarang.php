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
        //CASH IN HAND


        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('template/backend/pages/hal_satuan_barang', $data); // load view home.php
    }
}
