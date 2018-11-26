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
        $this->load->model('device_setting_model', 'device_setting');


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
        $this->page['device_id'] = $this->uuid->v4();

        // render
        $this->render('Devices', $this->page);
//        var_dump($this->page['devices']);
    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $brands = $this->brands->with_device_brand()->get_all();
        $brands = function () use ($id, $brands) {
            if ($brands) {
                foreach ($brands as $brand) {
                    if (isset($brand->device_brand) && $brand->device_brand != NULL) {
                        foreach ($brand->device_brand as $db) {
                            if ($db->device_id == $id) {
                                $brand->selected = 'selected';
                                break;
                            } else {
                                $brand->selected = '';
                            }
                        }
                    } else {
                        $brand->selected = '';
                    }
                }
            }

            return $brands;

        };
        $this->page['brands'] = $brands();
        $locations = $this->locations->with_device_location()->get_all();
        $locations = function () use ($id, $locations) {
            if ($locations) {
                foreach ($locations as $location) {
                    if (isset($location->device_location) && $location->device_location != NULL) {
                        foreach ($location->device_location as $db) {
                            if ($db->device_id == $id) {
                                $location->selected = 'selected';
                                break;
                            } else {
                                $location->selected = '';
                            }
                        }
                    } else {
                        $location->selected = '';
                    }
                }
            }

            return $locations;

        };
        $this->page['locations'] = $locations();
        $types = $this->types->with_device_type()->get_all();
        $types = function () use ($id, $types) {
            if ($types) {
                foreach ($types as $type) {
                    if (isset($type->device_type) && $type->device_type != NULL) {
                        foreach ($type->device_type as $db) {
                            if ($db->device_id == $id) {
                                $type->selected = 'selected';
                                break;
                            } else {
                                $type->selected = '';
                            }
                        }
                    } else {
                        $type->selected = '';
                    }
                }
            }

            return $types;

        };
        $this->page['types'] = $types();
        $tags = $this->tags->with_device_tag()->get_all();
        $tags = function () use ($id, $tags) {
            if ($tags) {
                foreach ($tags as $tag) {
                    if (isset($tag->device_tag) && $tag->device_tag != NULL) {
                        foreach ($tag->device_tag as $db) {
                            if ($db->device_id == $id) {
                                $tag->selected = 'selected';
                                break;
                            } else {
                                $tag->selected = '';
                            }
                        }
                    } else {
                        $tag->selected = '';
                    }
                }
            }

            return $tags;

        };
        $this->page['tags'] = $tags();
        $this->page['device'] = $this->devices->where('device_id', $id)
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->get();

        // render
        $this->render('Devices', $this->page);
//        echo '<pre>';
//        var_dump($this->page['brands']);
//        echo '</pre>';
    }

    public function save()
    {
        $data_device = array(
            'device_id' => $this->input->post('device_id'),
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
                $this->device_brand->where('device_id', $data_device['device_id'])->delete();
                $this->device_type->where('device_id', $data_device['device_id'])->delete();
                $this->device_location->where('device_id', $data_device['device_id'])->delete();
                $this->device_tag->where('device_id', $data_device['device_id'])->delete();
                foreach ($data_brands as $brand) {
                    $this->device_brand->insert(array(
                        'device_id' => $data_device['device_id'],
                        'brand_id' => $brand
                    ));
                }
                foreach ($data_types as $type) {
                    $this->device_type->insert(array(
                        'device_id' => $data_device['device_id'],
                        'type_id' => $type
                    ));
                }

                foreach ($data_locations as $location) {
                    $this->device_location->insert(array(
                        'device_id' => $data_device['device_id'],
                        'location_id' => $location
                    ));
                }

                foreach ($data_tags as $tag) {
                    $this->device_tag->insert(array(
                        'device_id' => $data_device['device_id'],
                        'tag_id' => $tag
                    ));
                }
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->devices->insert($data_device);
                $this->device_setting->insert(array('device_id' => $data_device['device_id'], 'device_status' => 0));
                foreach ($data_brands as $brand) {
                    $this->device_brand->insert(array(
                        'device_id' => $data_device['device_id'],
                        'brand_id' => $brand
                    ));
                }
                foreach ($data_types as $type) {
                    $this->device_type->insert(array(
                        'device_id' => $data_device['device_id'],
                        'type_id' => $type
                    ));
                }

                foreach ($data_locations as $location) {
                    $this->device_location->insert(array(
                        'device_id' => $data_device['device_id'],
                        'location_id' => $location
                    ));
                }

                foreach ($data_tags as $tag) {
                    $this->device_tag->insert(array(
                        'device_id' => $data_device['device_id'],
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
            $this->device_setting->where('device_id', $id)->delete();
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