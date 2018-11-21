<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // menu expand
        $this->page['hosts']['root'] = 'active';
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
        // menu expand
        $this->page['hosts']['device_up'] = 'active';

        // title segment
        $this->title('Hosts Up');
        // load page css and js
        $this->dashboard_log_css_js();
        $this->render('Dashboard_up', $this->page);
    }

    public function device_down()
    {
        // menu expand
        $this->page['hosts']['device_down'] = 'active';
        // title segment
        $this->title('Hosts Down');
        // load page css and js
        $this->dashboard_log_css_js();
        $this->render('Dashboard_down', $this->page);
    }

    public function device_log()
    {
        // menu expand
        $this->page['hosts']['device_log'] = 'active';
        // title segment
        $this->title('Hosts Log');
        // load page css and js
        $this->dashboard_log_css_js();
        $this->render('Dashboard_log', $this->page);
    }

}

/* End of file DashboardCtrl.php */