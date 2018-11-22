<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends MY_Model
{

    public function __construct()
    {
        $this->table = 'users';
        $this->primary_key = 'user_id';
        $this->protected = array('created_at', 'update_at', 'deleted_at');
        $this->timestamps = FALSE;
        $this->soft_deletes = FALSE;
        parent::__construct();
    }
}

/* End of file .php */