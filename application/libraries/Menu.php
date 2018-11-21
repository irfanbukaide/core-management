<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu
{
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function set_active()
    {
        return 'active';
    }

    public function set_class_active()
    {
        return '<div class="active"></div>';
    }

    public function deactive()
    {
        return '';
    }
}

?>
