<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Types_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'types';
        $this->primary_key = 'type_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
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