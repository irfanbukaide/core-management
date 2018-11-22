<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HostsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();


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
        $this->render('Hosts', $this->page);
    }

    public function host_up()
    {

        // title segment
        $this->title('Host Up');
        // load page css and js
        $this->hosts_css_js();
        $this->render('Hosts_up', $this->page);
    }

    public function host_down()
    {
        // title segment
        $this->title('Host Down');
        // load page css and js
        $this->hosts_css_js();
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

}

/* End of file HostsCtrl.php */