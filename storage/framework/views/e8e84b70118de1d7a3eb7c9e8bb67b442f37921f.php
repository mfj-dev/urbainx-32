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
    <link href="https://fonts.googleapis.com/css?family=Quicksand|Staatliches" rel="stylesheet">
    <!-- =============================== BASE CSS ================ -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap-grid.css')); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/icons.css')); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/style.css')); ?>" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/responsive.css')); ?>" media="all" />
</head>
<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(Voyager::image(setting('site.logo'))); ?>" alt="logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                                data-target="#urbianxNav" aria-controls="urbianxNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class=" icon-line-awesome-bars"></span>
                        </button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="urbianxNav">
                            <ul class="navbar-nav mr-auto" id="urbianxMenu">
                               <!-- =============================== menu ================ -->
                                  <?php echo e(menu('Top-menu')); ?>

                                <!-- =============================== menu ================ -->
                            </ul>
                            <?php if(auth()->guard()->guest()): ?>
                            <!-- Signin btn -->
                            <div class="urbianx-signin-btn">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo e(asset('assets/images/Guest.png')); ?>" alt="Guest-image"></a>
                                    <div class="dropdown-menu menu-Gest" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="<?php echo e(route('login')); ?>"><i class=" icon-feather-user"></i> Welcome Guest</a>
                                        <a class="dropdown-item" href="<?php echo e(route('register')); ?>"><i class=" icon-feather-log-in"></i> Register to be one of us</a>
                                    </div>
                                </li>
                            </div> 
                            <!-- Signin btn -->  
                            <?php else: ?>
                            <!-- =============================== user ================ -->
                            <?php if(Auth::user()->role_id == '1'): ?>
                            <!-- Signin btn -->
                            <div class="urbianx-signin-btn">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo asset(Voyager::image(Auth::user()->avatar)); ?>" alt="Guest-image" style="width: 20%;float: right;">
                                    </a>
                                    <div class="dropdown-menu menu-Gest" aria-labelledby="navbarDropdown2" style="margin: 2.125rem -45px 0;">
                                        <a class="dropdown-item" href="<?php echo e(url('/admin/users')); ?>"><i class="icon-line-awesome-users"></i> Activating Listes </a>
                                        <a class="dropdown-item" href="<?php echo e(url('/admin')); ?>"><i class="icon-material-outline-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="icon-material-outline-power-settings-new"></i><?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                         <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            </div> 
                            <!-- =============================== user ================ -->
                            <?php elseif(Auth::user()->role_id == '2'): ?>
                            <!-- Signin btn -->
                            <div class="urbianx-signin-btn">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo asset(Voyager::image(Auth::user()->avatar)); ?>" alt="Guest-image" style="width: 20%;float: right;">
                                    </a>
                                    <div class="dropdown-menu menu-Gest" aria-labelledby="navbarDropdown2" style="margin: 2.125rem -45px 0;">
                                <a class="dropdown-item" href="<?php echo e(url('Users')); ?>/<?php echo e(Auth::user()->name); ?>"><i class="icon-feather-flag"></i> Profile </a>
                                <a class="dropdown-item" href="<?php echo e(url('Users')); ?>/<?php echo e(Auth::user()->name); ?>"><i class="icon-feather-heart"></i> Favourite</a>
                                <a class="dropdown-item" href="<?php echo e(url('Users')); ?>/<?php echo e(Auth::user()->name); ?>/edit"><i class="icon-feather-edit"></i> Edit Profile</a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="icon-material-outline-power-settings-new"></i><?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                         <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            </div> 
                              <!-- =============================== user ================ -->
                            <?php elseif(Auth::user()->role_id == '3'): ?>
                            <!-- Signin btn -->
                            <div class="urbianx-signin-btn">
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo asset(Voyager::image(Auth::user()->avatar)); ?>" alt="Guest-image" style="width: 20%;float: right;">
                                    </a>
                                    <div class="dropdown-menu menu-Gest" aria-labelledby="navbarDropdown2" style="margin: 2.125rem -45px 0;">
                                <a class="dropdown-item" href="<?php echo e(url('Users')); ?>/<?php echo e(Auth::user()->name); ?>"><i class="icon-feather-flag"></i> Profile </a>
                                <a class="dropdown-item" href="<?php echo e(url('Listes')); ?>/create"><i class="icon-material-outline-assignment"></i> Add Listing  </a>
                                <a class="dropdown-item" href="<?php echo e(url('Users')); ?>/<?php echo e(Auth::user()->name); ?>/edit"><i class="icon-feather-edit"></i> Edit Profile</a>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="icon-material-outline-power-settings-new"></i><?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                         <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            </div> 
                            <?php endif; ?>
                            <!-- Signin btn --> 
                            <?php endif; ?> 
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ==================== ***** Header Area End ***** ======================== -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- ==================== ****** Footer Area Start ****** ==================== -->
    <footer class="urbianx-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>Copyright &copy; All rights reserved 2020 | <?php echo e(setting('site.adress')); ?> | Tel <?php echo e(setting('site.Phone')); ?> 
                         <a href="<?php echo e(url('english')); ?>"><img src="<?php echo e(asset('assets/images/en.png')); ?>" ></a>
                         <a href="<?php echo e(url('German')); ?>"><img src="<?php echo e(asset('assets/images/gr.png')); ?>" width="18"></a>
                         <a href="<?php echo e(url('arabic')); ?>"><img src="<?php echo e(asset('assets/images/kr.jpg')); ?>" width="18"></a>
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="<?php echo e(setting('social-media.linkedin')); ?>"><i class="icon-feather-linkedin" aria-haspopup="true"></i></a>
                        <a href="<?php echo e(setting('social-media.behance')); ?>"><i class="icon-line-awesome-behance" aria-hidden="true"></i></a>
                        <a href="<?php echo e(setting('social-media.dribbble')); ?>"><i class="icon-brand-dribbble" aria-hidden="true"></i></a>
                        <a href="<?php echo e(setting('social-media.twitter')); ?>"><i class="icon-feather-twitter" aria-haspopup="true"></i></a>
                        <a href="<?php echo e(setting('social-media.facebook')); ?>"><i class="icon-feather-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
    <!-- ================ common_scripts ============= -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery-2.2.4.min.js')); ?>"></script>
    <!-- =============================== javascript ================ -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <!-- ================ common_scripts ============= -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- =============================== javascript ================ -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <!-- ================ common_scripts ============= -->
    <script type="text/javascript" src="<?php echo e(asset('assets/js/active.js')); ?>"></script>
</body>
</html>




<?php /**PATH C:\xampp\htdocs\zams\urbainx-32\urbinx\Urbainx\resources\views/english/layout/main.blade.php ENDPATH**/ ?>