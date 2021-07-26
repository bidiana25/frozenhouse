<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $data = [

            "title" => "Dashboard",
        ];
        //CASH IN HAND


        // function render_backend tersebut dari file core/MY_Controller.php
        $this->render_backend('home', $data); // load view home.php
    }
}
