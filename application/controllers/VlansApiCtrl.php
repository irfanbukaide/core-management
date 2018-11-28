<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VlansApiCtrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // load session
        $this->load->library('session');

        // load model
        $this->load->model('Vlans_model', 'vlans');
        $this->load->model('Vendors_model', 'vendors');
        $this->load->model('Locations_model', 'locations');
        $this->load->model('vlan_vendor_model', 'vlan_vendor');
        $this->load->model('vlan_location_model', 'vlan_location');

        if (!isset($_SESSION['user_id'])) {
            echo json_encode('Session timeout', true);
            exit();
        }
    }

    public function index()
    {
        $resp = array();

        $vlans = $this->vlans
            ->with_vlan_vendor()
            ->with_vlan_location()
            ->get_all();

        $vlans_arr = array();
        foreach ($vlans as $vlan) {
            $vendors = array();
            $locations = array();

            if (isset($vlan->vlan_vendor) && $vlan->vlan_vendor != NULL) {
                foreach ($vlan->vlan_vendor as $a) {
                    $vendor = $this->vendors->where('vendor_id', $a->vendor_id)->get();
                    array_push($vendors, array(
                        'name' => $vendor->vendor_name
                    ));
                }
            }

            if (isset($vlan->vlan_location) && $vlan->vlan_location != NULL) {
                foreach ($vlan->vlan_location as $a) {
                    $location = $this->locations->where('location_id', $a->location_id)->get();
                    array_push($locations, array(
                        'name' => $location->location_name
                    ));
                }
            }

            array_push($vlans_arr, array(
                'id' => $vlan->vlan_id,
                'name' => $vlan->vlan_name,
                'bandwidth' => $vlan->vlan_bandwidth,
                'speedtype' => $vlan->vlan_speedtype,
                'vendors' => $vendors,
                'locations' => $locations,
                'vlan_edit' => site_url('vlan/edit/' . $vlan->vlan_id),
                'vlan_delete' => site_url('vlan/delete/' . $vlan->vlan_id),
            ));
        }


        $resp['vlans'] = $vlans_arr;

        echo json_encode($resp, true);

    }

}

/* End of file Controllername.php */