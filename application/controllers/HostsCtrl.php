<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HostsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // menu expand
        $this->page['hosts']['root'] = 'active';
    }

    public function index()
    {
        // menu expand
        $this->page['hosts']['device'] = 'active';

        // title segment
        $this->title('Hosts');
        // load page css and js
        $this->hosts_css_js();
        $this->render('Hosts', $this->page);
    }

    public function device_up()
    {
        // menu expand
        $this->page['hosts']['device_up'] = 'active';

        // title segment
        $this->title('Hosts Up');
        // load page css and js
        $this->hosts_css_js();
        $this->render('Hosts_up', $this->page);
    }

    public function device_down()
    {
        // menu expand
        $this->page['hosts']['device_down'] = 'active';
        // title segment
        $this->title('Hosts Down');
        // load page css and js
        $this->hosts_css_js();
        $this->render('Hosts_down', $this->page);
    }

    public function device_log()
    {
        // menu expand
        $this->page['hosts']['device_log'] = 'active';
        // title segment
        $this->title('Hosts Log');
        // load page css and js
        $this->hosts_css_js();
        $this->render('Hosts_log', $this->page);
    }

}

/* End of file HostsCtrl.php */