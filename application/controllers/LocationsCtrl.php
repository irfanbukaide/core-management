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
    }

    public function index()
    {
        $this->master_css_js();

        // title segment
        $this->title('Locations');

        // load data
        $this->page['locations'] = $this->locations->get_all();

        // render
        $this->render('Master_locations', $this->page);
    }

    public function save()
    {
        $data_location = array(
            'location_id' => $this->input->post('location_id'),
            'location_name' => $this->input->post('location_name')
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
            $this->locations->where('location_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/location');
    }


}

/* End of file DashboardCtrl.php */