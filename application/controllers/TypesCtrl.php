<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TypesCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Types_model', 'types');
        $this->load->model('Device_type_model', 'device_type');


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
        $this->title('Types');

        // load data
        $this->page['mode'] = 'create';
        $this->page['types'] = $this->types->get_all();
        $this->page['type_id'] = $this->uuid->v4();

        // render
        $this->render('Master_types', $this->page);
    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $this->page['type'] = $this->types->where('type_id', $id)->get();

        // render
        $this->render('Master_types', $this->page);
    }

    public function save()
    {
        $data_type = array(
            'type_id' => $this->input->post('type_id'),
            'type_name' => $this->input->post('type_name')
        );

        try {
            $type = $this->types->where('type_id', $data_type['type_id'])->get();

            if ($type) {
                $this->types->update($data_type, 'type_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->types->insert($data_type);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/type');
    }

    public function delete($id)
    {
        try {
            $this->device_type->where('type_id', $id)->delete();
            $this->types->where('type_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/type');
    }


}

/* End of file DashboardCtrl.php */