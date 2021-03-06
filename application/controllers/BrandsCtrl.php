<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Brands_model', 'brands');
        $this->load->model('Device_brand_model', 'device_brand');

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
        $this->title('Brands');

        // load data
        $this->page['mode'] = 'create';
        $this->page['brands'] = $this->brands->get_all();
        $this->page['brand_id'] = $this->uuid->v4();

        // render
        $this->render('Master_brands', $this->page);
    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $this->page['brand'] = $this->brands->where('brand_id', $id)->get();

        // render
        $this->render('Master_brands', $this->page);
    }

    public function save()
    {
        $data_brand = array(
            'brand_id' => $this->input->post('brand_id'),
            'brand_name' => $this->input->post('brand_name')
        );

        try {
            $brand = $this->brands->where('brand_id', $data_brand['brand_id'])->get();

            if ($brand) {
                $this->brands->update($data_brand, 'brand_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->brands->insert($data_brand);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/brand');
    }

    public function delete($id)
    {
        try {
            $this->device_brand->where('brand_id', $id)->delete();
            $this->brands->where('brand_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/brand');
    }


}

/* End of file DashboardCtrl.php */