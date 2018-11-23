<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DevicesCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

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


        // save session url
        $this->save_session_url(current_url());

        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        }
    }

    public function index()
    {
        $this->master_css_js();

        // title segment
        $this->title('Devices');

        // load data
        $this->page['mode'] = 'create';
        $this->page['brands'] = $this->brands->get_all();
        $this->page['locations'] = $this->locations->get_all();
        $this->page['types'] = $this->types->get_all();
        $this->page['tags'] = $this->tags->get_all();
        $this->page['devices'] = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->get_all();

        // render
        $this->render('Master_devices', $this->page);
//        var_dump($this->page['devices']);
    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $this->page['brands'] = $this->brands->get_all();
        $this->page['locations'] = $this->locations->get_all();
        $this->page['types'] = $this->types->get_all();
        $this->page['tags'] = $this->tags->get_all();
        $this->page['devices'] = $this->devices->where('device_id', $id)
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->get_all();

        // render
        $this->render('Master_devices', $this->page);
    }

    public function save()
    {
        $device_id = $this->devices->count_rows() + 1;
        $data_device = array(
            'device_id' => $device_id,
            'device_name' => $this->input->post('device_name'),
            'device_ipaddr' => $this->input->post('device_ipaddr')
        );

        $data_brands = $this->input->post('brands');
        $data_types = $this->input->post('types');
        $data_locations = $this->input->post('locations');
        $data_tags = $this->input->post('tags');


        try {
            $device = $this->devices->where('device_id', $data_device['device_id'])->get();

            if ($device) {
                $this->devices->update($data_device, 'device_id');
                foreach ($data_brands as $brand) {
                    $this->device_brand->update(array(
                        'device_id' => $device_id,
                        'brand_id' => $brand
                    ), 'device_id');
                }
                foreach ($data_types as $type) {
                    $this->device_type->update(array(
                        'device_id' => $device_id,
                        'type_id' => $type
                    ), 'device_id');
                }

                foreach ($data_locations as $location) {
                    $this->device_location->update(array(
                        'device_id' => $device_id,
                        'location_id' => $location
                    ), 'device_id');
                }

                foreach ($data_tags as $tag) {
                    $this->device_tag->update(array(
                        'device_id' => $device_id,
                        'tag_id' => $tag
                    ), 'device_id');
                }
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->devices->insert($data_device);
                foreach ($data_brands as $brand) {
                    $this->device_brand->insert(array(
                        'device_id' => $device_id,
                        'brand_id' => $brand
                    ));
                }
                foreach ($data_types as $type) {
                    $this->device_type->insert(array(
                        'device_id' => $device_id,
                        'type_id' => $type
                    ));
                }

                foreach ($data_locations as $location) {
                    $this->device_location->insert(array(
                        'device_id' => $device_id,
                        'location_id' => $location
                    ));
                }

                foreach ($data_tags as $tag) {
                    $this->device_tag->insert(array(
                        'device_id' => $device_id,
                        'tag_id' => $tag
                    ));
                }

                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('device');
    }

    public function delete($id)
    {
        try {
            $this->device_brand->where('device_id', $id)->delete();
            $this->device_type->where('device_id', $id)->delete();
            $this->device_location->where('device_id', $id)->delete();
            $this->device_tag->where('device_id', $id)->delete();
            $this->devices->where('device_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('device');
    }


}

/* End of file DashboardCtrl.php */