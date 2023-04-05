<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Craftads | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>front//img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front//plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front//plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>front//plugins/fontawesome/css/all.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front//plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url();?>front//plugins/owlcarousel/owl.theme.default.min.css">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front//plugins/aos/aos.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?=base_url();?>front//css/style.css">
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
                                <a href="<?=base_url();?>Home/about">Talk to Us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#user-register">Sell my Skill</a>
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
        <!-- /Header -->

        <!-- Hero Section -->
        <section class="hero-section hero-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 ">
                        <div class="section-search-box d-flex align-items-center aos" data-aos="fade-up">
                            <div class="section-search">
                                <h3>World's Largest <span>Marketplace</span></h3>
                                <p>Search From 150 Awesome Verified Ads!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- home Search -->
        <section class="popular-search">
            <div class="true-search-box aos" data-aos="fade-up">
                <div class="container">
                    <div class="true-search-fix">
                        <div class="search-box">
                            <form action="https://html.truelysell.com/template/search.html">
                                <div class="search-input line">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="What are you looking for?">
                                    </div>
                                </div>
                                <div class="search-input">
                                    <i class="fas fa-location-arrow bficon"></i>
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Your Location">
                                    </div>
                                </div>
                                <div class="search-btn">
                                    <button class="btn search_service">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="search-cat">
                            <i class="fas fa-circle"></i>
                            <span>Popular Searches</span>
                            <a href="search.html">Electrical Works</a>
                            <a href="search.html">Cleaning</a>
                            <a href="search.html">AC Repair</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /home Search -->

        <!-- Featured Category  -->
        <section class="feature-category dots-hover">
            <div class="container">
                <div class="section-heading text-center aos" data-aos="fade-up">
                    <h2>Featured Categories</h2>
                    <span>What do you need to find?</span>
                </div>
                <div class="service-carousel">
                    <div class="categories-slider owl-carousel owl-theme aos" data-aos="fade-up">
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-car"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Car mechanism & <br>Car Wash</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-laptop"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Computer service & <br> Spares</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-building"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Building Construction & <br>Paintings</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-brush"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Steam Car & <br> Wash</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-laptop"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Computer service & <br> Spares</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-building"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Building Construction & <br>Paintings</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-car"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="#">Car mechanism & <br>Car Wash</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="search.html" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-brush"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="search.html">Steam Car & <br> Wash</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="categories-widget">
                            <div class="categories-img d-flex justify-content-center align-items-center">
                                <div class="categories-img-box">
                                    <a href="#" class="d-flex justify-content-center align-items-center">
                                        <i class="fas fa-car"></i>
                                    </a>
                                    <div class="category-card text-center">
                                        <h4>
                                            <a href="#">Car mechanism & <br>Car Wash</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Category -->

        <!-- Popular Servides -->
        <section class="popular-services truly-one-service dots-hover">
            <div class="container">
                <div class="section-heading text-center">
                    <h2>Most Popular Services</h2>
                    <span>What do you need to find?</span>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="service-carousel">
                            <div class="service-slider owl-carousel owl-theme aos" data-aos="fade-up">
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-13.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-01.jpg" alt="">
                                                </a>
                                                <span class="service-price">$25</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Glass Cleaning</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Toughened Glass Fitting Service</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>28-62-76-32</span>
                                                </span>
                                                <span class="col ser-location">
                                                    <span>Wayne, New Jersey</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-14.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-02.jpg" alt="">
                                                </a>
                                                <span class="service-price">$50</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Car Mechanism</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Car Repair Service</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>792 5457</span></span>
                                                <span class="col ser-location"><span>Hanover, Maryland</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-15.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-03.jpg" alt="">
                                                </a>
                                                <span class="service-price">$45</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Computer Repairing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Computer Repairing & Spares</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>030 44 89 44</span></span>
                                                <span class="col ser-location"><span>Kalispell, Montana</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-04.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-04.jpg" alt="">
                                                </a>
                                                <span class="service-price">$14</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Car Wash</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Steam Car Wash</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>514-756-6436</span></span>
                                                <span class="col ser-location"><span>Electra, Texas</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-05.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-05.jpg" alt="">
                                                </a>
                                                <span class="service-price">$100</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Cleaning</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">House Cleaning Services</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>442 82 780</span></span>
                                                <span class="col ser-location"><span>Sylvester, Georgia</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-06.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-06.jpg" alt="">
                                                </a>
                                                <span class="service-price">$80</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Computer</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Computer & Server AMC Service</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>(07) 4516 0420</span></span>
                                                <span class="col ser-location"><span>Los Angeles, California</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-07.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-07.jpg" alt="">
                                                </a>
                                                <span class="service-price">$5</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Interior</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Interior Designing</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>0660 616 82 76</span></span>
                                                <span class="col ser-location"><span>Hanover, Maryland</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-08.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-08.jpg" alt="">
                                                </a>
                                                <span class="service-price">$75</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Construction</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Building Construction Services</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>0699 149 25 07</span></span>
                                                <span class="col ser-location"><span>Burr Ridge, Illinois</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-09.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-09.jpg" alt="">
                                                </a>
                                                <span class="service-price">$500</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Painting</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Commercial Painting Services</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>28-62-76-32</span></span>
                                                <span class="col ser-location"><span>Huntsville, Alabama</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-widget">
                                    <div class="service-img">
                                        <a href="service-details.html">
                                            <img class="img-fluid serv-img" alt="Service Image"
                                                src="<?=base_url();?>front//img/services/service-10.jpg">
                                        </a>
                                        <div class="fav-btn">
                                            <a href="javascript:void(0)" class="fav-icon">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                        </div>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="service-details.html">
                                                    <img src="<?=base_url();?>front//img/customer/user-10.jpg" alt="">
                                                </a>
                                                <span class="service-price">$150</span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="service-details.html">Plumbing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title">
                                            <a href="service-details.html">Plumbing Services</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="user-info">
                                            <div class="row">
                                                <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                    <span>0680 880 20 45</span></span>
                                                <span class="col ser-location"><span>Richmond, Virginia</span> <i
                                                        class="fas fa-map-marker-alt ms-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Servides -->

        <!-- How It Works -->
        <section class="how-work truely-one-work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center aos" data-aos="fade-up">
                            <h2>How It Works</h2>
                            <span>What do you need to find?</span>
                        </div>
                        <div class="howworksec">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="howwork aos" data-aos="fade-up">
                                        <div class=" d-flex justify-content-center">
                                            <div class="list-out d-flex align-items-center"><span>1</span></div>
                                            <div class="iconround">
                                                <img src="<?=base_url();?>front//img/work-icon-1.svg" alt="">
                                            </div>
                                        </div>
                                        <h3>Choose What To Do</h3>
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla
                                            ut metus varius laoreet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="howwork aos" data-aos="fade-up">
                                        <div class=" d-flex justify-content-center">
                                            <div class="list-out d-flex align-items-center"><span
                                                    class="list-number">2</span></div>
                                            <div class="iconround">
                                                <img src="<?=base_url();?>front//img/work-icon-2.svg" alt="">
                                            </div>
                                        </div>
                                        <h3>Find What You Want</h3>
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla
                                            ut metus varius laoreet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="howwork aos" data-aos="fade-up">
                                        <div class=" d-flex justify-content-center">
                                            <div class="list-out d-flex align-items-center"><span
                                                    class="list-number">3</span></div>
                                            <div class="iconround">
                                                <img src="<?=base_url();?>front//img/work-icon-3.png" alt="">
                                            </div>
                                        </div>
                                        <h3>Amazing Places</h3>
                                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla
                                            ut metus varius laoreet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /How It Works -->

        <!-- /our app -->
        <section class="download-app">
            <div class="container">
                <div class="app-world">
                    <div class="app-world-box">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-12">
                                <div class="col-md-12">
                                    <div class="heading aos" data-aos="fade-up">
                                        <h2>Download Our App</h2>
                                        <span>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra
                                            nulla ut metus varius laoreet.Aliquam lorem ante, dapibus in, viverra quis,
                                            feugiat </span>
                                    </div>
                                </div>
                                <div class="downlaod-set aos" data-aos="fade-up">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="<?=base_url();?>front//img/app-gp.png" alt="img"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="<?=base_url();?>front//img/app-ap.png" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="appimg-set aos" data-aos="fade-up">
                                    <img src="<?=base_url();?>front//img/down-app.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /our app -->

        <!-- Footer -->
        <footer class="footer footer-two">

            <!-- Footer Top -->
            <div class="footer-top aos" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <div class="footer-logo-sell">
                                    <img src="<?=base_url();?>front//img/logo-two.png" alt="img">
                                </div>
                                <div class="footer-about">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">Categories</h2>
                                <ul>
                                    <li>
                                        <a href="search.html">Computer</a>
                                    </li>
                                    <li>
                                        <a href="search.html">Interior</a>
                                    </li>
                                    <li>
                                        <a href="search.html">Car Wash</a>
                                    </li>
                                    <li>
                                        <a href="search.html">Cleaning</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Address</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="far fa-building"></i></span>
                                        <p>367 Hillcrest Lane, Irvine, California, United States</p>
                                    </div>
                                    <p><i class="fas fa-headphones"></i> 321 546 8764</p>
                                    <p class="mb-0"><i class="fas fa-envelope"></i> <a
                                            href="https://html.truelysell.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="7e0a0c0b1b12070d1b12123e1b061f130e121b501d1113">[email&#160;protected]</a>
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget -->
                            <div class="footer-widget">
                                <h2 class="footer-title">Follow Us</h2>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-facebook"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                    <a href="search.html"
                                        class="btn footer-btn d-flex align-items-center justify-content-center">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- /Footer Widget -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0">&copy; 2022 <a href="index.html">Truelysell</a>. All rights
                                        reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <!-- Copyright Menu -->
                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li>
                                            <a href="term-condition.html">Terms and Conditions</a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html">Privacy</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /Copyright Menu -->
                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->
                </div>
            </div>
            <!-- /Footer Bottom -->

        </footer>
        <!-- /Footer -->

    </div>

    <!-- Provider Register Modal -->
    <div class="modal account-modal fade multi-step" id="provider-register" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Join as a Provider</h3>
                    </div>

                    <!-- Register Form -->
                    <form action="https://html.truelysell.com/template/index.html">
                        <div class="form-group form-focus">
                            <label class="focus-label">Name</label>
                            <input type="text" class="form-control" placeholder="johndoe@exapmle.com">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="986 452 1236">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Create Password</label>
                            <input type="password" class="form-control" placeholder="********">
                        </div>
                        <div class="text-end">
                            <a class="forgot-link" href="#">Already have an account?</a>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                        </div>
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        <div class="row form-row social-login">
                            <div class="col-6 d-grid">
                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i>
                                    Login</a>
                            </div>
                            <div class="col-6 d-grid">
                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i>
                                    Login</a>
                            </div>
                        </div>
                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /Provider Register Modal -->

    <!-- User Register Modal -->
    <div class="modal account-modal fade multi-step" id="user-register" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Join as a User</h3>
                    </div>

                    <!-- Register Form -->
                    <form action="https://html.truelysell.com/template/index.html">
                        <div class="form-group form-focus">
                            <label class="focus-label">Name</label>
                            <input type="text" class="form-control" placeholder="johndoe@exapmle.com">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="986 452 1236">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Create Password</label>
                            <input type="password" class="form-control" placeholder="********">
                        </div>
                        <div class="text-end">
                            <a class="forgot-link" href="#">Already have an account?</a>
                        </div>
                        <div class="d-grid log-in-btn">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
                        </div>
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        <div class="row form-row social-login">
                            <div class="col-6 d-grid">
                                <a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f me-1"></i>
                                    Login</a>
                            </div>
                            <div class="col-6 d-grid">
                                <a href="#" class="btn btn-google btn-block"><i class="fab fa-google me-1"></i>
                                    Login</a>
                            </div>
                        </div>
                    </form>
                    <!-- /Register Form -->

                </div>
            </div>
        </div>
    </div>
    <!-- /User Register Modal -->

    <!-- Login Modal -->
    <div class="modal account-modal fade" id="login_modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-header">
                        <h3>Login <span>Truelysell</span></h3>
                    </div>
                    <form action="https://html.truelysell.com/template/index.html">
                        <div class="form-group form-focus">
                            <label class="focus-label">Email</label>
                            <input type="email" class="form-control" placeholder="truelysell@example.com">
                        </div>
                        <div class="form-group form-focus">
                            <label class="focus-label">Password</label>
                            <input type="password" class="form-control" placeholder="********">
                        </div>
                        <div class="text-end">
                        </div>
                        <div class="d-grid log-in-btn">
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                        </div>
                        <div class="login-or"> <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>
                        <div class="row form-row social-login">
                            <div class="col-6 d-grid"><a href="#" class="btn btn-facebook btn-block"><i
                                        class="fab fa-facebook-f me-1"></i> Login</a>
                            </div>
                            <div class="col-6 d-grid"><a href="#" class="btn btn-google btn-block"><i
                                        class="fab fa-google me-1"></i> Login</a>
                            </div>
                        </div>
                        <div class="text-center dont-have">Don’t have an account? <a href="#">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Login Modal -->

    <!-- jQuery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?=base_url();?>front//js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="<?=base_url();?>front//js/popper.min.js"></script>
    <script src="<?=base_url();?>front//plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Owl JS -->
    <script src="<?=base_url();?>front//plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- Aos -->
    <script src="<?=base_url();?>front//plugins/aos/aos.js"></script>

    <!-- Custom JS -->
    <script src="<?=base_url();?>front//js/script.js"></script>

</body>

</html>