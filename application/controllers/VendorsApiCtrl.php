<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorsApiCtrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load session
        $this->load->library('session');

        // load model
        $this->load->model('Vendors_model', 'vendors');
        $this->load->model('Vlan_vendor_model', 'vlan_vendor');

        if (!isset($_SESSION['user_id'])) {
            echo json_encode('Session timeout', true);
            exit();
        }
    }


    public function index()
    {
        $resp = array();

        $vendors = $this->vendors->get_all();
        $vendors = function () use ($vendors) {
            foreach ($vendors as $vendor) {
                $vendor->vendor_edit = site_url('master/edit/' . $vendor->vendor_id);
                $vendor->vendor_delete = site_url('master/delete/' . $vendor->vendor_id);
            }

            return $vendors;
        };
        $resp['vendors'] = $vendors();

        echo json_encode($resp, true);
    }


}

/* End of file DashboardCtrl.php */