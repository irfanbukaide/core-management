<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locations_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'locations';
        $this->primary_key = 'location_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_many['device_location'] = array(
            'foreign_model' => 'Device_location_model',
            'foreign_table' => 'device_location',
            'foreign_key' => 'location_id',
            'local_key' => 'location_id'
        );

        $this->has_many['vlan_location'] = array(
            'foreign_model' => 'Vlan_location_model',
            'foreign_table' => 'vlan_location',
            'foreign_key' => 'location_id',
            'local_key' => 'location_id'
        );
        parent::__construct();
    }
}

/* End of file .php */