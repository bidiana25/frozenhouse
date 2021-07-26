<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SupplierModel');
    }

    public function index()
    {
        $data = [
            "supplier" => $this->SupplierModel->select_supplier(),
            "title" => "Supplier",
        ];
        //CASH IN HAND


        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('template/backend/pages/hal_supplier', $data); // load view home.php
    }
}
