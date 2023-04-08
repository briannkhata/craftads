<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Craft Ads | <?=$page_title;?> </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>uploads/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>front/plugins/fontawesome/css/all.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>front/plugins/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />

    <!-- Aos CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front/plugins/aos/aos.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front/css/style.css">
</head>

<body class="body-two">

    <!-- Loader -->
    <div class="page-loading">
        <div class="preloader-inner">
            <div class="preloader-square-swapping">
                <div class="cssload-square-part cssload-square-green"></div>
                <div class="cssload-square-part cssload-square-pink"></div>
                <div class="cssload-square-blend"></div>
            </div>
        </div>
    </div>
    <!-- /Loader -->

    <div class="main-wrapper">

        <!-- Header -->
        <header class="header header-two">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="container">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index.html" class="navbar-brand logo">
                            <img src="<?=base_url();?>uploads/logo.png" class="img-fluid" alt="Logo">
                        </a>
                        <a href="index.html" class="navbar-brand logo-small">
                            <img src="<?=base_url();?>uploads/logo.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="<?=base_url();?>uploads/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="active has-submenu">
                                <a href="<?=base_url();?>">Home</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>Home/about">About Us</a>
                            </li>
                            <li>
                                <a href="<?=base_url();?>Home/contact">Contact Us</a>
                            </li>

                            <li>
                                <a href="<?=base_url();?>Home/craftads">Craft Ads List</a>
                            </li>

                            <li>
                                <a href="<?=base_url();?>Home/testimony">Testimonials</a>
                            </li>

                            <li>
                                <a href="<?=base_url();?>Home/join">Join the Network</a>
                            </li>

                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <li class="nav-item">
                            <a class="nav-link header-login" href="<?=base_url();?>Home/login">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>