<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
        // load template library
        $this->load->library('Template');

        // load helper
        $this->load->helper('url');


        // load base css and js
        $this->base_css_js();
    }

    public function render($view, $data = array(), $return = false)
	{
        return $this->template->render($view, $data, $return);
	}

    public function base_css_js()
    {
        // load base css
        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-ui/jquery-ui.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/font-awesome/5.3/css/all.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/animate/animate.min.css'));
        $this->template->add_css(base_url('color-admin/assets/css/default/style.min.css'));
        $this->template->add_css(base_url('color-admin/assets/css/default/style-responsive.min.css'));
        $this->template->add_css(base_url('color-admin/assets/css/default/theme/default.css'));

        // load base js
        $this->template->add_js(base_url('color-admin/assets/plugins/jquery/jquery-3.3.1.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/jquery-ui/jquery-ui.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/slimscroll/jquery.slimscroll.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/js-cookie/js.cookie.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/js/theme/default.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/js/apps.min.js'), TRUE);
    }

}

/* End of file MY_Controller.php */