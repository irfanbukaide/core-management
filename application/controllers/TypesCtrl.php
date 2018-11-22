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
    }

    public function index()
    {
        $this->master_css_js();

        // load data
        $this->page['types'] = $this->types->get_all();

        // render
        $this->render('Master_types', $this->page);
    }

    public function save()
    {
        $data_brand = array(
            'brand_id' => $this->input->post('brand_id'),
            'brand_name' => $this->input->post('brand_name')
        );

        try {
            $brand = $this->types->where('brand_id', $data_brand['brand_id'])->get();

            if ($brand) {
                $this->types->update($data_brand, 'brand_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->types->insert($data_brand);
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
            $this->types->where('brand_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/type');
    }


}

/* End of file DashboardCtrl.php */