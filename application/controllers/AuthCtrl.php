<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCtrl extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Users_model', 'users');
    }

    public function index()
    {

    }

    public function login($post = '')
    {
        if ($post == 'do') {
            $user_data = array(
                'user_email' => $this->input->post('user_email'),
                'user_password' => $this->input->post('user_password'),
            );

            try {
                $user = $this->users->where($user_data)->get();
                if ($user) {
                    $session_data = array(
                        'user_id' => $user->user_id,
                        'user_name' => $user->user_name,
                        'user_email' => $user->user_email,
                    );

                    $this->session->set_userdata($session_data);

                    if ($this->get_session_url()) {
                        redirect($this->get_session_url());
                    } else {
                        redirect('/');
                    }
                } else {
                    $this->pesan->gagal('Wrong email or password');
                    $this->load->view('Login');
                }

            } catch (Exception $e) {
                $this->pesan->gagal('ERROR : ' . $e);
            }
        } else {
            $this->load->view('Login');
        }

    }

    public function logout()
    {
        $data_session = array('user_id', 'user_name', 'user_email');
        $this->session->unset_userdata($data_session);

        $this->pesan->berhasil('You have successfully logged out');

        redirect('login');
    }

}

/* End of file AuthCtrl.php */