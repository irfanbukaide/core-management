<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * default layout
 * Location: application/views/
 */
$config['template_layout'] = 'template/layout';

/**
 * default css
 */
$config['template_css'] = array(
    'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' => 'screen',
    base_url('color-admin/assets/plugins/jquery-ui/jquery-ui.min.css') => 'screen',
    base_url('color-admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css') => 'screen',
    base_url('color-admin/assets/plugins/font-awesome/5.3/css/all.min.css') => 'screen',
    base_url('color-admin/assets/plugins/animate/animate.min.css') => 'screen',
    base_url('color-admin/assets/css/default/style.min.css') => 'screen',
    base_url('color-admin/assets/css/default/style-responsive.min.css') => 'screen',
    base_url('color-admin/assets/css/default/theme/default.css') => 'screen'
);

/**
 * default javascript
 * load javascript on header: FALSE
 * load javascript on footer: TRUE
 */
$config['template_js'] = array(
    base_url('color-admin/assets/plugins/pace/pace.min.js') => FALSE,
    base_url('color-admin/assets/plugins/jquery/jquery-3.3.1.min.js') => TRUE,
    base_url('color-admin/assets/plugins/jquery-ui/jquery-ui.min.js') => TRUE,
    base_url('color-admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js') => TRUE,
    base_url('color-admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') => TRUE,
    base_url('color-admin/assets/plugins/js-cookie/js.cookie.js') => TRUE,
    base_url('color-admin/assets/js/theme/default.min.js') => TRUE,
    base_url('color-admin/assets/js/apps.min.js') => TRUE,
);

/**
 * default variable
 */
$config['template_vars'] = array(
    'site_description' => 'System Monitor',
    'site_keywords' => 'System Monitor'
);

/**
 * default site title
 */
$config['base_title'] = 'System Monitor';

/**
 * default title separator
 */
$config['title_separator'] = ' > ';
