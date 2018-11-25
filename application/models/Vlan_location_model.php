<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vlan_location_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'vlan_location';
        $this->primary_key = 'vlan_location_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_one['vlans'] = array(
            'foreign_model' => 'Vlans_model',
            'foreign_table' => 'vlans',
            'foreign_key' => 'vlan_id',
            'local_key' => 'vlan_id'
        );
        $this->has_one['locations'] = array(
            'foreign_model' => 'Vendors_model',
            'foreign_table' => 'location',
            'foreign_key' => 'location_id',
            'local_key' => 'location_id'
        );
        parent::__construct();
    }
}

/* End of file .php */