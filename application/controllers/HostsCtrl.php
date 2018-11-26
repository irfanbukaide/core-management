<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HostsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // load library
        $this->load->library('Secondstotime');

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
        $this->load->model('device_log_model', 'device_log');
        $this->load->model('device_result_model', 'device_result');


        // save session url
        $this->save_session_url(current_url());

        if (!isset($_SESSION['user_id'])) {
            redirect('login');
        }


    }

    public function index()
    {
        // title segment
        $this->title('Host');
        // load page css and js
        $this->hosts_css_js();

        $this->page['devices'] = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->with_device_setting()
            ->with_device_result()
            ->get_all();

        $this->render('Hosts', $this->page);
    }

    public function host_up()
    {

        // title segment
        $this->title('Host Up');
        // load page css and js
        $this->hosts_css_js();

        $this->page['devices'] = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->with_device_setting('where: device_status=1')
            ->with_device_result()
            ->get_all();
        $this->render('Hosts_up', $this->page);
    }

    public function host_down()
    {
        // title segment
        $this->title('Host Down');
        // load page css and js
        $this->hosts_css_js();

        $this->page['devices'] = $this->devices
            ->with_device_brand()
            ->with_device_type()
            ->with_device_location()
            ->with_device_tag()
            ->with_device_setting('where: device_status=0')
            ->with_device_result()
            ->get_all();

        $this->render('Hosts_down', $this->page);
    }

    public function host_log()
    {
        // title segment
        $this->title('Host Log');
        // load page css and js
        $this->hosts_css_js();
        $this->render('Hosts_log', $this->page);
    }

    public function filter()
    {
        $this->page['brands'] = $this->brands->get_all();
        $this->page['locations'] = $this->locations->get_all();
        $this->page['types'] = $this->types->get_all();
        $this->page['tags'] = $this->tags->get_all();

        $this->load->view('FilterHosts', $this->page);
    }

}

/* End of file HostsCtrl.php */