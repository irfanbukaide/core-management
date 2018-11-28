<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiCtrl extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Devices_model', 'devices');
        $this->load->model('Brands_model', 'brands');
        $this->load->model('Types_model', 'types');
        $this->load->model('Locations_model', 'locations');
        $this->load->model('Tags_model', 'tags');
    }

    public function hosts_all()
    {
        $get_hasil = array();
        $get_devices = array();

        $devices = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->with_device_setting()
            ->get_all();

        foreach ($devices as $device) {
            $get_brands = array();
            $get_types = array();
            $get_locations = array();
            $get_tags = array();
            if (isset($device->device_brand) && $device->device_brand != NULL) {
                foreach ($device->device_brand as $db) {
                    $brand = $this->brands->where('brand_id', $db->brand_id)->get();
                    array_push($get_brands, array(
                        'name' => $brand->brand_name
                    ));
                }
            }


            if (isset($device->device_type) && $device->device_type != NULL) {
                foreach ($device->device_type as $db) {
                    $type = $this->types->where('type_id', $db->type_id)->get();
                    array_push($get_types, array(
                        'name' => $type->type_name
                    ));
                }
            }

            if (isset($device->device_location) && $device->device_location != NULL) {
                foreach ($device->device_location as $db) {
                    $location = $this->locations->where('location_id', $db->location_id)->get();
                    array_push($get_locations, array(
                        'name' => $location->location_name
                    ));
                }
            }

            if (isset($device->device_tag) && $device->device_tag != NULL) {
                foreach ($device->device_tag as $db) {
                    $tag = $this->tags->where('tag_id', $db->tag_id)->get();
                    array_push($get_tags, array(
                        'name' => $tag->tag_name
                    ));
                }
            }


            array_push($get_devices, array(
                'id' => $device->device_id,
                'name' => $device->device_name,
                'ipaddress' => $device->device_ipaddr,
                'brands' => $get_brands,
                'types' => $get_types,
                'locations' => $get_locations,
                'tags' => $get_tags,
                'running' => $device->device_setting->device_running,
                'status' => $device->device_setting->device_status,
                'start_url' => site_url('hosts/start/' . $device->device_id),
                'stop_url' => site_url('hosts/stop/' . $device->device_id),
                'event_url' => site_url('hosts/show_event/' . $device->device_id),
            ));
        }

        $get_hasil['draw'] = 1;
        $get_hasil['recordsTotal'] = $this->devices->count_rows();
        $get_hasil['recordsFiltered'] = $this->devices->count_rows();
        $get_hasil['data'] = $get_devices;


        echo json_encode($get_hasil, true);

    }

    public function hosts_up()
    {
        $get_hasil = array();
        $get_devices = array();

        $devices = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->with_device_setting('where: device_status=1')
            ->get_all();

        foreach ($devices as $device) {
            $get_brands = array();
            $get_types = array();
            $get_locations = array();
            $get_tags = array();
            if (isset($device->device_brand) && $device->device_brand != NULL) {
                foreach ($device->device_brand as $db) {
                    $brand = $this->brands->where('brand_id', $db->brand_id)->get();
                    array_push($get_brands, array(
                        'name' => $brand->brand_name
                    ));
                }
            }


            if (isset($device->device_type) && $device->device_type != NULL) {
                foreach ($device->device_type as $db) {
                    $type = $this->types->where('type_id', $db->type_id)->get();
                    array_push($get_types, array(
                        'name' => $type->type_name
                    ));
                }
            }

            if (isset($device->device_location) && $device->device_location != NULL) {
                foreach ($device->device_location as $db) {
                    $location = $this->locations->where('location_id', $db->location_id)->get();
                    array_push($get_locations, array(
                        'name' => $location->location_name
                    ));
                }
            }

            if (isset($device->device_tag) && $device->device_tag != NULL) {
                foreach ($device->device_tag as $db) {
                    $tag = $this->tags->where('tag_id', $db->tag_id)->get();
                    array_push($get_tags, array(
                        'name' => $tag->tag_name
                    ));
                }
            }


            array_push($get_devices, array(
                'id' => $device->device_id,
                'name' => $device->device_name,
                'ipaddress' => $device->device_ipaddr,
                'brands' => $get_brands,
                'types' => $get_types,
                'locations' => $get_locations,
                'tags' => $get_tags,
                'running' => $device->device_setting->device_running,
                'status' => $device->device_setting->device_status,
                'start_url' => site_url('hosts/start/' . $device->device_id),
                'stop_url' => site_url('hosts/stop/' . $device->device_id),
                'event_url' => site_url('hosts/show_event/' . $device->device_id),
            ));
        }

        $get_hasil['draw'] = 1;
        $get_hasil['recordsTotal'] = $this->devices->count_rows();
        $get_hasil['recordsFiltered'] = $this->devices->count_rows();
        $get_hasil['data'] = $get_devices;


        echo json_encode($get_hasil, true);

    }

    private function label($str)
    {
        return '<span class="label label-dark mb-2">' . $str . '</span>';
    }


}

/* End of file ApiCtrl.php */