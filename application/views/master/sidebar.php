<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub <?= isset($hosts['root']) ? $hosts['root'] : ''; ?>">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-th-large"></i>
                    <span>Hosts</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= isset($hosts['device_all']) ? $hosts['device_up'] : ''; ?>">
                        <a href="<?= site_url('dashboard'); ?>">
                            Host All
                        </a>
                    </li>
                    <li class="<?= isset($hosts['device_up']) ? $hosts['device_up'] : ''; ?>">
                        <a href="<?= site_url('dashboard/device_up'); ?>">
                            <span class="badge badge-success pull-right">10</span>
                            Host Up
                        </a>
                    </li>
                    <li class="<?= isset($hosts['device_down']) ? $hosts['device_down'] : ''; ?>">
                        <a href="<?= site_url('dashboard/device_down'); ?>">
                            <span class="badge badge-danger pull-right">10</span>
                            Host Down
                        </a>
                    </li>
                    <li class="<?= isset($hosts['device_log']) ? $hosts['device_log'] : ''; ?>">
                        <a href="<?= site_url('dashboard/device_log'); ?>">
                            <span class="badge badge-danger pull-right">120</span>
                            Host Log
                        </a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <span class="badge pull-right">10</span>
                    <i class="fa fa-hdd"></i>
                    <span>Email</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_inbox.html">Inbox</a></li>
                    <li><a href="email_compose.html">Compose</a></li>
                    <li><a href="email_detail.html">Detail</a></li>
                </ul>
            </li>
            <li>
                <a href="widget.html">
                    <i class="fab fa-simplybuilt"></i>
                    <span>Widgets <span class="label label-theme m-l-5">NEW</span></span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gem"></i>
                    <span>UI Elements <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="ui_general.html">General <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                    <li><a href="ui_typography.html">Typography</a></li>
                    <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                    <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                    <li><a href="ui_modal_notification.html">Modal & Notification <i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                    <li><a href="ui_media_object.html">Media Object</a></li>
                    <li><a href="ui_buttons.html">Buttons <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                    <li><a href="ui_icons.html">Icons</a></li>
                    <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                    <li><a href="ui_ionicons.html">Ionicons</a></li>
                    <li><a href="ui_tree.html">Tree View</a></li>
                    <li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
                    <li><a href="ui_social_buttons.html">Social Buttons</a></li>
                    <li><a href="ui_tour.html">Intro JS</a></li>
                </ul>
            </li>
            <li>
                <a href="bootstrap_4.html">
                    <div class="icon-img">
                        <img src="<?= base_url('color-admin/assets/img/logo/logo-bs4.png'); ?>" alt=""/>
                    </div>
                    <span>Bootstrap 4 <span class="label label-theme m-l-5">NEW</span></span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-list-ol"></i>
                    <span>Form Stuff <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="form_elements.html">Form Elements <i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="form_plugins.html">Form Plugins <i class="fa fa-paper-plane text-theme m-l-5"></i></a>
                    </li>
                    <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Wizards</a></li>
                    <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
                    <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
                    <li><a href="form_editable.html">X-Editable</a></li>
                    <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                    <li><a href="form_summernote.html">Summernote</a></li>
                    <li><a href="form_dropzone.html">Dropzone</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-table"></i>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="table_basic.html">Basic Tables</a></li>
                    <li class="has-sub">
                        <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                        <ul class="sub-menu">
                            <li><a href="table_manage.html">Default</a></li>
                            <li><a href="table_manage_autofill.html">Autofill</a></li>
                            <li><a href="table_manage_buttons.html">Buttons</a></li>
                            <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                            <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                            <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                            <li><a href="table_manage_keytable.html">KeyTable</a></li>
                            <li><a href="table_manage_responsive.html">Responsive</a></li>
                            <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                            <li><a href="table_manage_scroller.html">Scroller</a></li>
                            <li><a href="table_manage_select.html">Select</a></li>
                            <li><a href="table_manage_combine.html">Extension Combination</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-star"></i>
                    <span>Front End</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="https://seantheme.com/color-admin-v4.2/frontend/one-page-parallax/index.html"
                           target="_blank">One Page Parallax</a></li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/frontend/blog/index.html"
                           target="_blank">Blog</a>
                    </li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/frontend/forum/index.html"
                           target="_blank">Forum</a>
                    </li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/frontend/e-commerce/index.html"
                           target="_blank">E-Commerce</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-envelope"></i>
                    <span>Email Template</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_system.html">System Template</a></li>
                    <li><a href="email_newsletter.html">Newsletter Template</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-chart-pie"></i>
                    <span>Chart</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="chart-flot.html">Flot Chart</a></li>
                    <li><a href="chart-morris.html">Morris Chart</a></li>
                    <li><a href="chart-js.html">Chart JS</a></li>
                    <li><a href="chart-d3.html">d3 Chart</a></li>
                </ul>
            </li>
            <li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-map"></i>
                    <span>Map</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="map_vector.html">Vector Map</a></li>
                    <li><a href="map_google.html">Google Map</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-image"></i>
                    <span>Gallery</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="gallery.html">Gallery v1</a></li>
                    <li><a href="gallery_v2.html">Gallery v2</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Page Options</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="page_blank.html">Blank Page</a></li>
                    <li><a href="page_with_footer.html">Page with Footer</a></li>
                    <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                    <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                    <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                    <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                    <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                    <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                    <li><a href="page_full_height.html">Full Height Content</a></li>
                    <li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
                    <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
                    <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                    <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                    <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                    <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                    <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                    <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-gift"></i>
                    <span>Extra</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="extra_timeline.html">Timeline</a></li>
                    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                    <li><a href="extra_search_results.html">Search Results</a></li>
                    <li><a href="extra_invoice.html">Invoice</a></li>
                    <li><a href="extra_404_error.html">404 Error Page</a></li>
                    <li><a href="extra_profile.html">Profile Page</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-key"></i>
                    <span>Login & Register</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="login_v2.html">Login v2</a></li>
                    <li><a href="login_v3.html">Login v3</a></li>
                    <li><a href="register_v3.html">Register v3</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cubes"></i>
                    <span>Version <span class="label label-theme m-l-5">NEW</span></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="javascript:;">HTML</a></li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/ajax/index.html">AJAX</a></li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/angularjs/index.html">ANGULAR JS</a>
                    </li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/angularjs6/index.html">ANGULAR JS 6 <i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="javascript:alert('Laravel Preview is not available on our demo site.')">LARAVEL <i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/vuejs/index.html">VUE JS <i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/material/index_v2.html">MATERIAL
                            DESIGN</a></li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/apple/index_v2.html">APPLE DESIGN</a>
                    </li>
                    <li><a href="https://seantheme.com/color-admin-v4.2/admin/transparent/index_v2.html">TRANSPARENT
                            DESIGN <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-medkit"></i>
                    <span>Helper</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-align-left"></i>
                    <span>Menu Level</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret"></b>
                            Menu 1.1
                        </a>
                        <ul class="sub-menu">
                            <li class="has-sub">
                                <a href="javascript:;">
                                    <b class="caret"></b>
                                    Menu 2.1
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:;">Menu 3.1</a></li>
                                    <li><a href="javascript:;">Menu 3.2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;">Menu 2.2</a></li>
                            <li><a href="javascript:;">Menu 2.3</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:;">Menu 1.2</a></li>
                    <li><a href="javascript:;">Menu 1.3</a></li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                            class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->