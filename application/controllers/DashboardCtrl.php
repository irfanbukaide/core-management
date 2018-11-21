<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // load page css and js
    }

    public function index()
    {
        $this->counter();
    }

    public function counter()
    {
        // load page css and js
        $this->dashboard_css_js();
        $this->render('Dashboard');
    }

    public function device_up()
    {
        // load page css and js
        $this->dashboard_log_css_js();
        $this->render('Dashboard_up');
    }

    public function device_down()
    {
        // load page css and js
        $this->dashboard_log_css_js();
        $this->render('Dashboard_down');
    }

    public function device_log()
    {
        // load page css and js
        $this->dashboard_log_css_js();
        $this->render('Dashboard_log');
    }

}

/* End of file DashboardCtrl.php */