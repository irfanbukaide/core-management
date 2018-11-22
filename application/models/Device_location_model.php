<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_location_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'device_location';
        $this->primary_key = 'device_location_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_one['devices'] = array(
            'foreign_model' => 'Devices_model',
            'foreign_table' => 'devices',
            'foreign_key' => 'device_id',
            'local_key' => 'device_id'
        );
        $this->has_one['locations'] = array(
            'foreign_model' => 'Locations_model',
            'foreign_table' => 'locations',
            'foreign_key' => 'location_id',
            'local_key' => 'location_id'
        );
        parent::__construct();
    }
}

/* End of file .php */