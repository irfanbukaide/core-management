<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 26/11/18
 * Time: 11:32
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Whitespace
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function remove($str)
    {
        $a = ltrim($str);
        $a = rtrim($a);

        return $a;
    }


}

/* End of file .php */