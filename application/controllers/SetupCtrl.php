<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SetupCtrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // load library
        $this->load->library('Pesan');
        $this->load->model('Users_model', 'users');
        $this->load->model('Settings_model', 'settings');
    }

    public function index()
    {
        $this->load->view('Setup');
    }

    public function step1($post = '')
    {
        $this->load->library('Uuid');
        if ($post == 'do') {
            $setting_data = array(
                'setting_id' => $this->uuid->v4(),
                'setting_webname' => $this->input->post('setting_webname'),
                'setting_organization' => $this->input->post('setting_organization'),
                'setting_interval' => $this->input->post('setting_interval'),
                'setting_timeout' => $this->input->post('setting_timeout'),
            );

            try {
                $setting = $this->settings->where($setting_data)->get();
                if ($setting) {
                    $this->settings->update($setting_data, 'setting_id');
                    $this->pesan->gagal('Successfull');
                } else {
                    $this->settings->insert($setting_data);
                    $this->pesan->gagal('Successfull');
                }
            } catch (Exception $e) {
                $this->pesan->gagal('ERROR : ' . $e);
            }

            redirect('setup/step2');
        } else {
            $this->load->view('Setup');
        }


    }
    public function step2($post = '')
    {
        $this->load->library('Uuid');
        if ($post == 'do') {
            $user_data = array(
                'user_id' => $this->uuid->v4(),
                'user_name' => 'admin',
                'user_email' => $this->input->post('user_email'),
                'user_password' => $this->input->post('user_password'),
            );

            try {
                $user = $this->users->insert($user_data);
                if ($user) {
                    $this->pesan->gagal('Successfull');
                }
            } catch (Exception $e) {
                $this->pesan->gagal('ERROR : ' . $e);
            }

            redirect('login');
        } else {
            $this->load->view('Setup2');
        }
    }

}

/* End of file SetupCtrl.php */