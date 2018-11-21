<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public $page;

    public function __construct()
    {
        parent::__construct();
        // load template library
        $this->load->library('Template');
        $this->load->library('Menu');

        // set page array
        $this->page = array();

        // set menu active


        // load base css and js
//        $this->base_css_js();
    }

    public function render($view, $data = array(), $return = false)
    {
        return $this->template->render($view, $data, $return);
    }

    public function title($title = '')
    {
        return $this->template->add_title_segment($title);
    }

//    public function base_css_js()
//    {
////        load base css
//        $this->template->add_css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
//        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-ui/jquery-ui.min.css'));
//        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css'));
//        $this->template->add_css(base_url('color-admin/assets/plugins/font-awesome/5.3/css/all.min.css'));
//        $this->template->add_css(base_url('color-admin/assets/plugins/animate/animate.min.css'));
//        $this->template->add_css(base_url('color-admin/assets/css/default/style.min.css'));
//        $this->template->add_css(base_url('color-admin/assets/css/default/style-responsive.min.css'));
//        $this->template->add_css(base_url('color-admin/assets/css/default/theme/default.css'));
//
////         load base js
//        $this->template->add_js(base_url('color-admin/assets/plugins/jquery/jquery-3.3.1.min.js'), TRUE);
//        $this->template->add_js(base_url('color-admin/assets/plugins/jquery-ui/jquery-ui.min.js'), TRUE);
//        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js'), TRUE);
//        $this->template->add_js(base_url('color-admin/assets/plugins/slimscroll/jquery.slimscroll.min.js'), TRUE);
//        $this->template->add_js(base_url('color-admin/assets/plugins/js-cookie/js.cookie.js'), TRUE);
//        $this->template->add_js(base_url('color-admin/assets/js/theme/default.min.js'), TRUE);
//        $this->template->add_js(base_url('color-admin/assets/js/apps.min.js'), TRUE);
//    }

    public function dashboard_css_js()
    {
        // load css
        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/gritter/css/jquery.gritter.css'));


        // load js
        $this->template->add_js(base_url('color-admin/assets/plugins/gritter/js/jquery.gritter.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/flot/jquery.flot.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/flot/jquery.flot.time.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/flot/jquery.flot.resize.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/flot/jquery.flot.pie.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/sparkline/jquery.sparkline.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/js/demo/dashboard.js'), TRUE);
        $this->template->add_js(base_url('jsinit/dashboard-init.js'), TRUE);


    }

    public function dashboard_log_css_js()
    {
        $this->template->add_css(base_url('color-admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css'));


        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/media/js/jquery.dataTables.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/js/release/table-manage-combine.js'), TRUE);
        $this->template->add_js(base_url('jsinit/dashboard_log-init.js'), TRUE);
    }

}

/* End of file MY_Controller.php */