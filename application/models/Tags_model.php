<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'tags';
        $this->primary_key = 'tag_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        $this->has_many['device_tag'] = array(
            'foreign_model' => 'Device_tag_model',
            'foreign_table' => 'device_tag',
            'foreign_key' => 'tag_id',
            'local_key' => 'tag_id'
        );
        parent::__construct();
    }
}

/* End of file .php */