<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Login | Core NMS</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href="color-admin/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"/>
    <link href="color-admin/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="color-admin/assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet"/>
    <link href="color-admin/assets/plugins/animate/animate.min.css" rel="stylesheet"/>
    <link href="color-admin/assets/css/default/style.min.css" rel="stylesheet"/>
    <link href="color-admin/assets/css/default/style-responsive.min.css" rel="stylesheet"/>
    <link href="color-admin/assets/css/default/theme/default.css" rel="stylesheet" id="theme"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="color-admin/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image"
                 style="background-image: url(color-admin/assets/img/login-bg/login-bg-11.jpg)"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>Core</b> NMS</h4>
                <p>
                    PT. Maxindo Mitra Solusi
                </p>
            </div>
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">
            <!-- begin login-header -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>Core</b> NMS
                    <small>Network Monitoring System</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end login-header -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="<?= site_url('login/do'); ?>" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-15">
                        <input type="text" class="form-control form-control-lg" id="user_email" name="user_email"
                               placeholder="Email Address" required/>
                    </div>
                    <div class="form-group m-b-15">
                        <input type="password" class="form-control form-control-lg" id="user_password"
                               name="user_password" placeholder="Password" required/>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign in</button>
                    </div>
                    <hr/>
                    <p class="text-center text-grey-darker">
                        &copy; Color Admin All Right Reserved 2018
                    </p>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end right-container -->
    </div>
    <!-- end login -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="color-admin/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="color-admin/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="color-admin/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
<script src="color-admin/assets/crossbrowserjs/html5shiv.js"></script>
<script src="color-admin/assets/crossbrowserjs/respond.min.js"></script>
<script src="color-admin/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="color-admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="color-admin/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="color-admin/assets/js/theme/default.min.js"></script>
<script src="color-admin/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
</body>
</html>
