<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
    }

    public function home()
    {
        $data = [

            "title" => "Dashboard",
        ];
        $data['omset_penjualan'] = $this->DashboardModel->select_penjualan();
        $data['jmlh_penjualan'] = $this->DashboardModel->hitungjumlahtransaksi();
        $data['jmlh_pelanggan'] = $this->DashboardModel->hitungjumlahcustomer();
        $data['jmlh_barang'] = $this->DashboardModel->hitungjumlahbarang();

        $this->render_backend('home', $data); // load view home.php
    }
}
