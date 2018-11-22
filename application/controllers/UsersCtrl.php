<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Users_model', 'users');
    }

    public function index()
    {
        $this->master_css_js();

        // title segment
        $this->title('Users');

        // load data
        $this->page['users'] = $this->users->get_all();

        // render
        $this->render('Master_users', $this->page);
    }

    public function save()
    {
        $data_user = array(
            'user_id' => $this->input->post('user_id'),
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_password' => $this->input->post('user_password'),
        );

        try {
            $user = $this->users->where('user_id', $data_user['user_id'])->get();

            if ($user) {
                $this->users->update($data_user, 'user_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->users->insert($data_user);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/user');
    }

    public function delete($id)
    {
        try {
            $this->users->where('user_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/user');
    }


}

/* End of file DashboardCtrl.php */