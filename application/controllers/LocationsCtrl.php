<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LocationsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Locations_model', 'locations');
        $this->load->model('Device_location_model', 'device_location');

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
        $this->title('Locations');

        // load data
        $this->page['mode'] = 'create';
        $this->page['locations'] = $this->locations->get_all();

        // render
        $this->render('Master_locations', $this->page);
    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $this->page['location'] = $this->locations->where('location_id', $id)->get();

        // render
        $this->render('Master_locations', $this->page);
    }

    public function save()
    {
        $data_location = array(
            'location_id' => $this->input->post('location_id'),
            'location_name' => $this->input->post('location_name'),
            'location_latitude' => $this->input->post('location_latitude'),
            'location_longitude' => $this->input->post('location_longitude'),
            'location_address' => $this->input->post('location_address')
        );

        try {
            $location = $this->locations->where('location_id', $data_location['location_id'])->get();

            if ($location) {
                $this->locations->update($data_location, 'location_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->locations->insert($data_location);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/location');
    }

    public function delete($id)
    {
        try {
            $this->device_location->where('location_id', $id)->delete();
            $this->locations->where('location_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/location');
    }


}

/* End of file DashboardCtrl.php */