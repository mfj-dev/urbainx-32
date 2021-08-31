<!DOCTYPE html>
<html lang="en">
<head>
   <!-- ===================================== Meta site ================================================ -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- ====== Laravel description site edit delete from admin panel ================== -->
    <meta name="description" content="<?php echo setting('site.description'); ?>">
    <!-- ====== Laravel author site edit delete from admin panel ====================== -->
    <meta name="author" content="<?php echo setting('site.author_title'); ?>">
    <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
    <meta name="keywords" content="<?php echo setting('site.keywords'); ?>">
    <!-- ====== Laravel robots site edit delete from admin panel ================== -->
    <meta name="robots" content="<?php echo setting('site.robots'); ?>">
     <!-- ====== Laravel favicon icon ================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('assets/images/favicon/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('assets/images/favicon/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('assets/images/favicon/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/images/favicon/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('assets/images/favicon/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('assets/images/favicon/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('assets/images/favicon/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/images/favicon/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/images/favicon/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(asset('assets/images/favicon/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/images/favicon/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('assets/images/favicon/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/images/favicon/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('assets/images/favicon/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ====== Laravel favicon icon================== -->
    <!-- ====== Laravel title site edit delete from admin panel ================== -->
    <title><?php echo e(setting('site.title')); ?></title>
    <!-- ============================== GOOGLE WEB FONT ========================== -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!-- ============================== GOOGLE WEB FONT ========================== -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Staatliches" rel="stylesheet">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.min.css')); ?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/daterangepicker.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/icons.css')); ?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
    
<!-- ==================== ***** Header Area End ***** ======================== -->
<?php echo $__env->yieldContent('content'); ?>
<!-- ==================== ****** Footer Area Start ****** ==================== -->
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/jquery-3.3.1.min.js')); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>
</html>

<?php /**PATH C:\xampp\htdocs\zams\urbainx-32\urbinx\Urbainx\resources\views/layouts/app.blade.php ENDPATH**/ ?>