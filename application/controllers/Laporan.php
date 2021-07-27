<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EntryPenjualanModel');
    }
    public function index()
    {
        $data = [
            "title" => "Cetak Data Penjualan",
        ];
        $this->render_backend('template/backend/pages/hal_cetak_penjualan', $data); // load view home.php
    }
}
