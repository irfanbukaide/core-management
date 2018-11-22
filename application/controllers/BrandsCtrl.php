<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();
    }

    public function index()
    {
        $this->master_css_js();
        $this->render('Master_brands');
    }

    public function save()
    {

    }


}

/* End of file DashboardCtrl.php */