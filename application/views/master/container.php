<!-- begin #page-loader -->
<div id="page-loader" class="fade show">
    <div class="material-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
        <div class="message">Loading...</div>
    </div>
</div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
    <?php
    require_once(APPPATH . 'views/master/header.php');
    require_once(APPPATH . 'views/master/sidebar.php');
    require_once(APPPATH . 'views/master/content.php');
    ?>

    <!-- begin theme-panel -->
    <div class="theme-panel theme-panel-lg">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <h5 class="m-t-0">Color Theme</h5>
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-red" data-theme="red"
                       data-theme-file="../assets/css/material/theme/red.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-pink" data-theme="pink"
                       data-theme-file="../assets/css/material/theme/pink.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange"
                       data-theme-file="../assets/css/material/theme/orange.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-yellow" data-theme="yellow"
                       data-theme-file="../assets/css/material/theme/yellow.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-lime" data-theme="lime"
                       data-theme-file="../assets/css/material/theme/lime.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-green" data-theme="green"
                       data-theme-file="../assets/css/material/theme/green.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-teal" data-theme="teal"
                       data-theme-file="../assets/css/material/theme/teal.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-aqua" data-theme="default"
                       data-theme-file="../assets/css/material/theme/default.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a>
                </li>
                <li class="active"><a href="javascript:;" class="bg-blue" data-theme="blue"
                                      data-theme-file="../assets/css/material/theme/blue.css"
                                      data-click="theme-selector" data-toggle="tooltip" data-trigger="hover"
                                      data-container="body" data-title="Blue">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple"
                       data-theme-file="../assets/css/material/theme/purple.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-indigo" data-theme="indigo"
                       data-theme-file="../assets/css/material/theme/indigo.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-black" data-theme="black"
                       data-theme-file="../assets/css/material/theme/black.css" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a>
                </li>
            </ul>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-6 control-label text-inverse f-w-600">Header Styling</div>
                <div class="col-md-6">
                    <select name="header-styling" class="form-control form-control-sm">
                        <option value="1">default</option>
                        <option value="2">inverse</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-6 control-label text-inverse f-w-600">Header</div>
                <div class="col-md-6">
                    <select name="header-fixed" class="form-control form-control-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
                <div class="col-md-6">
                    <select name="sidebar-styling" class="form-control form-control-sm">
                        <option value="1">default</option>
                        <option value="2">grid</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
                <div class="col-md-6">
                    <select name="sidebar-fixed" class="form-control form-control-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
                <div class="col-md-6">
                    <select name="content-gradient" class="form-control form-control-sm">
                        <option value="1">disabled</option>
                        <option value="2">enabled</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
                <div class="col-md-6">
                    <select name="direction" class="form-control form-control-sm">
                        <option value="1">LTR</option>
                        <option value="2">RTL</option>
                    </select>
                </div>
            </div>
            <div class="divider"></div>
            <h5>THEME VERSION</h5>
            <div class="theme-version">
                <a href="https://seantheme.com/color-admin-v4.2/admin/html/index_v2.html">
                    <span style="background-image: url(../assets/img/theme/default.jpg);"></span>
                </a>
                <a href="https://seantheme.com/color-admin-v4.2/admin/transparent/index_v2.html">
                    <span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
                </a>
            </div>
            <div class="theme-version">
                <a href="https://seantheme.com/color-admin-v4.2/admin/apple/index_v2.html">
                    <span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
                </a>
                <a href="index_v2.html" class="active">
                    <span style="background-image: url(../assets/img/theme/material.jpg);"></span>
                </a>
            </div>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <a href="javascript:;" class="btn btn-inverse btn-block btn-rounded"
                       data-click="reset-local-storage"><b>Reset Local Storage</b></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end theme-panel -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="material-icons">keyboard_arrow_up</i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->