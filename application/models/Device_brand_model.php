<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_brand_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'device_brand';
        $this->primary_key = 'device_brand_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_one['devices'] = array(
            'foreign_model' => 'Devices_model',
            'foreign_table' => 'devices',
            'foreign_key' => 'device_id',
            'local_key' => 'device_id'
        );
        $this->has_one['brands'] = array(
            'foreign_model' => 'Brands_model',
            'foreign_table' => 'brands',
            'foreign_key' => 'brand_id',
            'local_key' => 'brand_id'
        );
        parent::__construct();
    }
}

/* End of file .php */