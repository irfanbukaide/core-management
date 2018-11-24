<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vlan_vendor_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'vlan_vendor';
        $this->primary_key = 'vlan_vendor_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_one['vlans'] = array(
            'foreign_model' => 'Vlans_model',
            'foreign_table' => 'vlans',
            'foreign_key' => 'vlan_id',
            'local_key' => 'vlan_id'
        );
        $this->has_one['vendors'] = array(
            'foreign_model' => 'Vendors_model',
            'foreign_table' => 'vendor',
            'foreign_key' => 'vendor_id',
            'local_key' => 'vendor_id'
        );
        parent::__construct();
    }
}

/* End of file .php */