<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-without-sidebar page-header-fixed">
    <?php
    require_once(APPPATH . 'views/master/header.php');
    //    require_once(APPPATH . 'views/master/sidebar.php');
    require_once(APPPATH . 'views/master/content.php');
    ?>

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade show"
       data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->

    <!-- begin modal crudadd-->

    <!-- end modal crudadd-->
</div>
<!-- end page container -->