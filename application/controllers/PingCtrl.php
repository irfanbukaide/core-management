<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PingCtrl extends CI_Controller
{
    private $running;

    public function __construct()
    {
        parent::__construct();
        $this->running = false;
        $this->load->model('Devices_model', 'devices');
        $this->load->model('Device_setting_model', 'device_setting');


    }

    public function start()
    {
        // load library
        $this->load->library('Live');

        $devices = $this->devices->with_device_setting()->get_all();

        if ($devices) {
            foreach ($devices as $device) {
                $ping = new Live($device->device_ipaddr, '255', '10');
                $latency = $ping->ping();
                if ($latency !== false) {
                    echo 'IP Address ' . $device->device_ipaddr . ' latency ' . $latency . ' ms';
                    echo '<br>';
                } else {
                    echo 'IP Address ' . $device->device_ipaddr . ' timeout';
                    echo '<br>';
                }
            }
        }

    }

    public function stop()
    {

    }

}

/* End of file PingCtrl.php */