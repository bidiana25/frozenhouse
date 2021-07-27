<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CetakLaporan extends MY_Controller
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
            "title" => "Cetak Data Penjualan",
        ];
        $this->render_backend('template/backend/pages/hal_cetak_penjualan', $data); // load view home.php
    }
    public function pdf()
    {
        $data = [
            "penjualan" => $this->EntryPenjualanModel->select_penjualan(),
            "title" => "Cetak Data Penjualan",
        ];
        $this->render_backend('template/backend/pages/hal_cetak_penjualan', $data); // load view home.php
    }
}
