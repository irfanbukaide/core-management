<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'brands';
        $this->primary_key = 'brand_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_many['device_brand'] = array(
            'foreign_model' => 'Device_brand_model',
            'foreign_table' => 'device_brand',
            'foreign_key' => 'brand_id',
            'local_key' => 'brand_id'
        );
        parent::__construct();
    }
}

/* End of file .php */