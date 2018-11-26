<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_result_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'device_result';
        $this->primary_key = 'device_result_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_one['devices'] = array(
            'foreign_model' => 'Devices_model',
            'foreign_table' => 'devices',
            'foreign_key' => 'device_id',
            'local_key' => 'device_id'
        );
        parent::__construct();
    }
}

/* End of file .php */