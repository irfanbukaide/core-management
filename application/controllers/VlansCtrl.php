<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VlansCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Vlans_model', 'vlans');
        $this->load->model('Vendors_model', 'vendors');
        $this->load->model('Locations_model', 'locations');
        $this->load->model('vlan_vendor_model', 'vlan_vendor');
        $this->load->model('vlan_location_model', 'vlan_location');

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
        $this->title('Vlans');

        // load data
        $this->page['mode'] = 'create';
        $this->page['vendors'] = $this->vendors->get_all();
        $this->page['locations'] = $this->locations->get_all();
        $this->page['vlans'] = $this->vlans
            ->with_vlan_vendor()
            ->with_vlan_location()
            ->get_all();
        $this->page['vlan_id'] = $this->uuid->v4();

        // render
        $this->render('Vlans', $this->page);
//        var_dump($this->page['vlans']);
    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $vendors = $this->vendors->with_vlan_vendor()->get_all();
        $vendors = function () use ($id, $vendors) {
            if ($vendors) {
                foreach ($vendors as $vendor) {
                    if (isset($vendor->vlan_vendor) && $vendor->vlan_vendor != NULL) {
                        foreach ($vendor->vlan_vendor as $db) {
                            if ($db->vlan_id == $id) {
                                $vendor->selected = 'selected';
                                break;
                            } else {
                                $vendor->selected = '';
                            }
                        }
                    } else {
                        $vendor->selected = '';
                    }
                }
            }

            return $vendors;

        };
        $this->page['vendors'] = $vendors();

        $locations = $this->locations->with_vlan_location()->get_all();
        $locations = function () use ($id, $locations) {
            if ($locations) {
                foreach ($locations as $location) {
                    if (isset($location->vlan_location) && $location->vlan_location != NULL) {
                        foreach ($location->vlan_location as $db) {
                            if ($db->vlan_id == $id) {
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
        $this->page['vlan'] = $this->vlans->where('vlan_id', $id)
            ->with_vlan_vendor()
            ->with_vlan_location()
            ->get();

        // render
        $this->render('Vlans', $this->page);
//        echo '<pre>';
//        var_dump($this->page['brands']);
//        echo '</pre>';
    }

    public function save()
    {
        $data_vlan = array(
            'vlan_id' => $this->input->post('vlan_id'),
            'vlan_name' => $this->input->post('vlan_name'),
            'vlan_bandwidth' => $this->input->post('vlan_bandwidth'),
            'vlan_speedtype' => $this->input->post('vlan_speedtype'),
        );

        $data_vendors = $this->input->post('vendors');
        $data_locations = $this->input->post('locations');


        try {
            $vlan = $this->vlans->where('vlan_id', $data_vlan['vlan_id'])->get();

            if ($vlan) {
                $this->vlans->update($data_vlan, 'vlan_id');
                $this->vlan_vendor->where('vlan_id', $data_vlan['vlan_id'])->delete();
                $this->vlan_location->where('vlan_id', $data_vlan['vlan_id'])->delete();
                foreach ($data_vendors as $vendor) {
                    $this->vlan_vendor->insert(array(
                        'vlan_id' => $data_vlan['vlan_id'],
                        'vendor_id' => $vendor
                    ));
                }
                foreach ($data_locations as $location) {
                    $this->vlan_location->insert(array(
                        'vlan_id' => $data_vlan['vlan_id'],
                        'location_id' => $location
                    ));
                }
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->vlans->insert($data_vlan);

                foreach ($data_vendors as $vendor) {
                    $this->vlan_vendor->insert(array(
                        'vlan_id' => $data_vlan['vlan_id'],
                        'vendor_id' => $vendor
                    ));
                }

                foreach ($data_locations as $location) {
                    $this->vlan_location->insert(array(
                        'vlan_id' => $data_vlan['vlan_id'],
                        'location_id' => $location
                    ));
                }

                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('vlan');
    }

    public function delete($id)
    {
        try {
            $this->vlan_vendor->where('vlan_id', $id)->delete();
            $this->vlan_location->where('vlan_id', $id)->delete();
            $this->vlans->where('vlan_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('vlan');
    }


}

/* End of file DashboardCtrl.php */