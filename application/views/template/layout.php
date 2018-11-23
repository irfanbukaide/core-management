<!DOCTYPE html>
<!--[if IE 8]>
<html lang="<?php echo $lang; ?>" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $webname; ?></title>
    <meta name="description" content="<?php echo $site_description; ?>"/>
    <meta name="keywords" content="<?php echo $site_keywords; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <?php echo $meta_tag; ?>
    <?php echo $styles; ?>
    <!-- JS -->
    <?php echo $scripts_header; ?>
</head>
<body>
<?php require_once(APPPATH . 'views/master/container.php'); ?>

<?php echo $scripts_footer; ?>
</body>
</html>