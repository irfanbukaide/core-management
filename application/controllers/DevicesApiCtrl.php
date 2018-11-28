<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DevicesApiCtrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // load session
        $this->load->library('session');

        // load model
        $this->load->model('Devices_model', 'devices');
        $this->load->model('Brands_model', 'brands');
        $this->load->model('Locations_model', 'locations');
        $this->load->model('Types_model', 'types');
        $this->load->model('Tags_model', 'tags');

        $this->load->model('device_brand_model', 'device_brand');
        $this->load->model('device_location_model', 'device_location');
        $this->load->model('device_type_model', 'device_type');
        $this->load->model('device_tag_model', 'device_tag');
        $this->load->model('device_setting_model', 'device_setting');
        $this->load->model('device_result_model', 'device_result');

        if (!isset($_SESSION['user_id'])) {
            echo json_encode('Session timeout', true);
            exit();
        }
    }

    public function index()
    {
        $resp = array();

        $devices = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->get_all();

        $devices_arr = array();
        foreach ($devices as $device) {
            $brands = array();
            $types = array();
            $locations = array();
            $tags = array();

            if (isset($device->device_brand) && $device->device_brand != NULL) {
                foreach ($device->device_brand as $a) {
                    $brand = $this->brands->where('brand_id', $a->brand_id)->get();
                    array_push($brands, array(
                        'name' => $brand->brand_name
                    ));
                }
            }

            if (isset($device->device_type) && $device->device_type != NULL) {
                foreach ($device->device_type as $a) {
                    $type = $this->types->where('type_id', $a->type_id)->get();
                    array_push($types, array(
                        'name' => $type->type_name
                    ));
                }
            }

            if (isset($device->device_location) && $device->device_location != NULL) {
                foreach ($device->device_location as $a) {
                    $location = $this->locations->where('location_id', $a->location_id)->get();
                    array_push($locations, array(
                        'name' => $location->location_name
                    ));
                }
            }

            if (isset($device->device_tag) && $device->device_tag != NULL) {
                foreach ($device->device_tag as $a) {
                    $tag = $this->tags->where('tag_id', $a->tag_id)->get();
                    array_push($tags, array(
                        'name' => $tag->tag_name
                    ));
                }
            }

            array_push($devices_arr, array(
                'id' => $device->device_id,
                'name' => $device->device_name,
                'ipaddress' => $device->device_ipaddr,
                'brands' => $brands,
                'types' => $types,
                'locations' => $locations,
                'tags' => $tags,
                'device_edit' => site_url('device/edit/' . $device->device_id),
                'device_delete' => site_url('device/delete/' . $device->device_id),
            ));
        }


        $resp['devices'] = $devices_arr;

        echo json_encode($resp, true);

    }

}

/* End of file Controllername.php */