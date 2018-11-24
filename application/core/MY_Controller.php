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
        $this->load->library('Pesan');
        $this->load->library('Uuid');
        $this->load->library('session');

        // set page array
        $this->page = array();

        // set configuration website
        $this->load->model('Settings_model', 'settings');
        $setting = $this->settings->get();
        $this->page['webname'] = $setting->setting_webname;
        $this->page['organization'] = $setting->setting_organization;
        $this->config->load('template');
        $this->config->set_item('base_title', $setting->setting_webname);


    }

    public function render($view, $data = array(), $return = false)
    {
        return $this->template->render($view, $data, $return);
    }

    public function title($title = '')
    {
        return $this->template->add_title_segment($title);
    }

    public function get_session_data($name)
    {
        return $this->session->userdata($name);
    }

    public function save_session_data($name, $value)
    {
        return $this->session->set_userdata($name, $value);
    }

    public function get_session_url()
    {
        return $this->session->userdata('url');
    }

    public function save_session_url($value = '/')
    {
        $text_save = explode('/', $value);
        $text_save_length = count($text_save);
        $hasil = $text_save[$text_save_length - 1];

        if ($hasil == 'save') {
            $value = str_replace('save', '', $value);
        } elseif ($hasil == 'do') {
            $value = str_replace('do', '', $value);
        } elseif ($hasil == 'login') {
            $value = str_replace('login', '', $value);
        }

        return $this->session->set_userdata('url', $value);
    }


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


    }

    public function page_css_js()
    {
        // load css plugin form
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/password-indicator/css/password-indicator.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-select/bootstrap-select.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-tag-it/css/jquery.tagit.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/select2/dist/css/select2.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css"
        '));
        $this->template->add_css(base_url('color-admin/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css'));

        $this->template->add_css(base_url('color-admin/assets/plugins/parsley/src/parsley.css'));

        // load css datatable
        $this->template->add_css(base_url('color-admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css'));
        $this->template->add_css(base_url('color-admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css'));

        // load js plugin form
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/masked-input/masked-input.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/password-indicator/js/password-indicator.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-select/bootstrap-select.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/jquery-tag-it/js/tag-it.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-daterangepicker/moment.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/select2/dist/js/select2.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-show-password/bootstrap-show-password.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/plugins/clipboard/clipboard.min.js'), TRUE);
        $this->template->add_js(base_url('color-admin/assets/js/release/form-plugins.js'), TRUE);

        $this->template->add_js(base_url('color-admin/assets/plugins/parsley/dist/parsley.js'), TRUE);

        // load js datatable
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
        $this->template->add_js(base_url('color-admin/assets/js/release/table-manage-default.js'), TRUE);
    }

    public function hosts_css_js()
    {
        $this->template->add_js(base_url('color-admin/assets/js/app/hosts-init.js'), TRUE);
    }

    public function master_css_js()
    {
        $this->template->add_js(base_url('color-admin/assets/js/app/master-init.js'), TRUE);
    }

}

/* End of file MY_Controller.php */