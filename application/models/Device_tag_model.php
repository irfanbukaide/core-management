<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device_tag_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'device_tag';
        $this->primary_key = 'device_tag_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_one['devices'] = array(
            'foreign_model' => 'Devices_model',
            'foreign_table' => 'devices',
            'foreign_key' => 'device_id',
            'local_key' => 'device_id'
        );
        $this->has_one['tags'] = array(
            'foreign_model' => 'Tags_model',
            'foreign_table' => 'tags',
            'foreign_key' => 'tag_id',
            'local_key' => 'tag_id'
        );
        parent::__construct();
    }
}

/* End of file .php */