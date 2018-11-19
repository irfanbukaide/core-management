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

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="material-icons">keyboard_arrow_up</i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->