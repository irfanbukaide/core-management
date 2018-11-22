<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Color Admin | 404 Error Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href="/color-admin/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <link href="/color-admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/color-admin/assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet"/>
    <link href="/color-admin/assets/plugins/animate/animate.min.css" rel="stylesheet"/>
    <link href="/color-admin/assets/css/default/style.min.css" rel="stylesheet"/>
    <link href="/color-admin/assets/css/default/style-responsive.min.css" rel="stylesheet"/>
    <link href="/color-admin/assets/css/default/theme/default.css" rel="stylesheet" id="theme"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="/color-admin/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin error -->
    <div class="error">
        <div class="error-code m-b-10">404</div>
        <div class="error-content">
            <div class="error-message"><?= $heading; ?></div>
            <div class="error-desc m-b-30">
                <?= $message; ?>
            </div>
            <div>
                <a href="/" class="btn btn-success p-l-20 p-r-20">Go Home</a>
            </div>
        </div>
    </div>
    <!-- end error -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
                class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="/color-admin/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="/color-admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/color-admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
<script src="/color-admin/assets/crossbrowserjs/html5shiv.js"></script>
<script src="/color-admin/assets/crossbrowserjs/respond.min.js"></script>
<script src="/color-admin/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="/color-admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/color-admin/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="/color-admin/assets/js/theme/default.min.js"></script>
<script src="/color-admin/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
</body>
</html>