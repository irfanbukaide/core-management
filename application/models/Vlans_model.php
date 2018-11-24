<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vlans_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'vlans';
        $this->primary_key = 'vlans_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_many['vlan_vendor'] = array(
            'foreign_model' => 'Vlan_vendor_model',
            'foreign_table' => 'vlan_vendor',
            'foreign_key' => 'vlan_id',
            'local_key' => 'vlan_id'
        );
        parent::__construct();
    }
}

/* End of file .php */