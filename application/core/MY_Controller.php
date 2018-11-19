<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
        // load template library
        $this->load->library('Template');
    }

    public function render($view, $data = array(), $return = false)
	{
        return $this->template->render($view, $data, $return);
	}

}

/* End of file MY_Controller.php */