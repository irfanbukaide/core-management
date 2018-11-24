<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorsCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load page css and js
        $this->page_css_js();

        // load model
        $this->load->model('Vendors_model', 'vendors');
        $this->load->model('Vlan_vendor_model', 'vlan_vendor');

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
        $this->title('Vendors');

        // load data
        $this->page['mode'] = 'create';
        $this->page['vendors'] = $this->vendors->get_all();
        $this->page['vendor_id'] = $this->uuid->v4();

        // render
        $this->render('Master_vendors', $this->page);

    }

    public function edit($id)
    {
        $this->master_css_js();

        // load data
        $this->page['mode'] = 'edit';
        $this->page['vendor'] = $this->vendors->where('vendor_id', $id)->get();

        // render
        $this->render('Master_vendors', $this->page);
    }

    public function save()
    {
        $data_vendor = array(
            'vendor_id' => $this->input->post('vendor_id'),
            'vendor_name' => $this->input->post('vendor_name')
        );

        try {
            $vendor = $this->vendors->where('vendor_id', $data_vendor['vendor_id'])->get();

            if ($vendor) {
                $this->vendors->update($data_vendor, 'vendor_id');
                $this->pesan->berhasil('Data successfully changed');
            } else {
                $this->vendors->insert($data_vendor);
                $this->pesan->berhasil('Data successfully created');
            }

        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/vendor');
    }

    public function delete($id)
    {
        try {
            $this->vlan_vendor->where('vendor_id', $id)->delete();
            $this->vendors->where('vendor_id', $id)->delete();
            $this->pesan->berhasil('Data successfully deleted');
        } catch (Exception $e) {
            $this->pesan->gagal('ERROR : ' . $e);
        }

        redirect('master/vendor');
    }


}

/* End of file DashboardCtrl.php */