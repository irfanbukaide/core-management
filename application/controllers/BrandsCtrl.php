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
        $this->render('Master_brands');
    }


}

/* End of file DashboardCtrl.php */