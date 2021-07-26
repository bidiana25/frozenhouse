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
        //CASH IN HAND


        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('template/backend/pages/hal_barang', $data); // load view home.php
    }
}
