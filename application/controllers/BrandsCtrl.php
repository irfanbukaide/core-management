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
        $this->page['brands'] = $this->brands->get_all();

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
            $this->brands->where('brand_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/brand');
    }


}

/* End of file DashboardCtrl.php */