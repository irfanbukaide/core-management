<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devices_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'devices';
        $this->primary_key = 'device_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_many['device_tag'] = array(
            'foreign_model' => 'Device_tag_model',
            'foreign_table' => 'device_tag',
            'foreign_key' => 'tag_id',
            'local_key' => 'tag_id'
        );
        $this->has_many['device_brand'] = array(
            'foreign_model' => 'Device_brand_model',
            'foreign_table' => 'device_brand',
            'foreign_key' => 'brand_id',
            'local_key' => 'brand_id'
        );

        $this->has_many['device_location'] = array(
            'foreign_model' => 'Device_location_model',
            'foreign_table' => 'device_location',
            'foreign_key' => 'location_id',
            'local_key' => 'location_id'
        );

        $this->has_many['device_type'] = array(
            'foreign_model' => 'Device_type_model',
            'foreign_table' => 'device_type',
            'foreign_key' => 'type_id',
            'local_key' => 'type_id'
        );
        parent::__construct();
    }
}

/* End of file .php */