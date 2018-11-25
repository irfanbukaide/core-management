<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Secondstotime
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function generate($seconds)
    {
        $dtF = new DateTime('@0');
        $dtT = new DateTime("@$seconds");
        return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes');
    }


}

/* End of file .php */