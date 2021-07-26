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
        //CASH IN HAND


        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('template/backend/pages/hal_pelanggan', $data); // load view home.php
    }
}
