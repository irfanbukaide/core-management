<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        //Do your magic here
    }

    public function index()
    {
        $this->render('Dashboard');
    }

}

/* End of file DashboardCtrl.php */