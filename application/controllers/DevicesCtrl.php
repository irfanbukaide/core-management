<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DevicesCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Devices_model', 'devices');


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
        $this->title('Devices');

        // load data
        $this->page['devices'] = $this->devices->get_all();

        // render
        $this->render('Master_devices', $this->page);
    }

    public function save()
    {
        $data_tag = array(
            'tag_id' => $this->input->post('tag_id'),
            'tag_name' => $this->input->post('tag_name')
        );

        try {
            $tag = $this->devices->where('tag_id', $data_tag['tag_id'])->get();

            if ($tag) {
                $this->devices->update($data_tag, 'tag_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->devices->insert($data_tag);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/tag');
    }

    public function delete($id)
    {
        try {
            $this->devices->where('tag_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/tag');
    }


}

/* End of file DashboardCtrl.php */