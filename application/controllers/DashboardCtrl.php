<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // load page css and js
        $this->dashboard_css_js();
    }

    public function index()
    {
        $this->render('Dashboard');
    }

}

/* End of file DashboardCtrl.php */