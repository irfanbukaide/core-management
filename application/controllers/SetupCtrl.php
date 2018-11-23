<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SetupCtrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Settings_model', 'settings');
    }

    public function index()
    {
        $this->load->view('Setup');
    }

    public function step1($post = '')
    {
        if ($post == 'do') {

        } else {
            $this->load->view('Setup');
        }
    }

    public function step2($post = '')
    {
        if ($post == 'do') {

        } else {
            $this->load->view('Setup2');
        }
    }

}

/* End of file SetupCtrl.php */