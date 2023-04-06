<?php include 'headerr.php';?>

<!-- /Header -->


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-view">
                    <div class="service-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Car Repair Services</h1>
                            <div class="fav-btn fav-btn-big">
                                <a href="javascript:void(0)" class="fav-icon with-border">
                                    <i class="fas fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <address class="service-location"><i class="fas fa-location-arrow"></i> Hanover,
                            Maryland</address>
                        <div class="rating">
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <span class="d-inline-block average-rating">(5)</span>
                        </div>
                        <div class="service-cate">
                            <a href="search.html">Automobile</a>
                        </div>
                    </div>
                    <div class="service-images service-carousel">
                        <div class="images-carousel owl-carousel owl-theme">
                            <div class="item">
                                <img src="<?=base_url();?>front/img/services/service-02.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="<?=base_url();?>front/img/services/service-02.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="<?=base_url();?>front/img/services/service-02.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="service-details">
                        <ul class="nav nav-pills service-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Services Offered</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab"
                                    aria-controls="pills-book" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="card service-description">
                                    <div class="card-body">
                                        <h5 class="card-title">Service Details</h5>
                                        <p class="mb-0">Car wash is a facility used to clean the exterior and,
                                            in some cases, the interior of motor vehicles. Car washes can be
                                            self-serve, fully automated, or full-service with attendants who
                                            wash the vehicle.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Services Offered</h5>
                                        <div class="service-offer">
                                            <ul class="list-bullet">
                                                <li>Lorem Ipsum</li>
                                                <li>Lorem Ipsum</li>
                                                <li>Lorem Ipsum</li>
                                                <li>Lorem Ipsum</li>
                                                <li>Lorem Ipsum</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-book" role="tabpanel" aria-labelledby="pills-book-tab">
                                <div class="card review-box">
                                    <div class="card-body">
                                        <div class="review-list">
                                            <div class="review-img">
                                                <img class="rounded-circle"
                                                    src="<?=base_url();?>front/img/customer/user-01.jpg" alt="">
                                            </div>
                                            <div class="review-info">
                                                <h5>Jeffrey Akridge</h5>
                                                <div class="review-date">August 06, 2020 20:07 pm</div>
                                                <p class="mb-0">Good Work</p>
                                            </div>
                                            <div class="review-count">
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <span class="d-inline-block average-rating">(5.0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="card-title">Related Services</h4>
                <div class="service-carousel">
                    <div class="popular-slider owl-carousel owl-theme">

                        <div class="service-widget">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img class="img-fluid serv-img" alt="Service Image"
                                        src="<?=base_url();?>front/img/services/service-03.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-03.jpg" alt="">
                                        </a>
                                        <span class="service-price">$2</span>
                                    </div>
                                    <div class="cate-list">
                                        <a class="bg-yellow" href="service-details.html">Electrical</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="service-details.html">Electric Panel Repairing Service</a>
                                </h3>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(4.5)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx30</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-04.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-04.jpg" alt="">
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
                                    <span class="d-inline-block average-rating">(0)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx74</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-05.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-05.jpg" alt="">
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
                                    <span class="d-inline-block average-rating">(0)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx91</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-06.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-06.jpg" alt="">
                                        </a>
                                        <span class="service-price">$100</span>
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
                                    <span class="d-inline-block average-rating">(0)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx92</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-07.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-07.jpg" alt="">
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
                                    <span class="d-inline-block average-rating">(4)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx28</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-08.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-08.jpg" alt="">
                                        </a>
                                        <span class="service-price">$100</span>
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
                                    <span class="d-inline-block average-rating">(4)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx62</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-09.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/customer/user-09.jpg" alt="">
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
                                    <span class="d-inline-block average-rating">(3)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx75</span></span>
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
                                        src="<?=base_url();?>front/img/services/service-10.jpg">
                                </a>
                                <div class="item-info">
                                    <div class="service-user">
                                        <a href="#">
                                            <img src="<?=base_url();?>front/img/user.jpg" alt="">
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
                                    <span class="d-inline-block average-rating">(3)</span>
                                </div>
                                <div class="user-info">
                                    <div class="row">
                                        <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                            <span>xxxxxxxx13</span></span>
                                        <span class="col ser-location"><span>Richmond, Virginia</span> <i
                                                class="fas fa-map-marker-alt ms-1"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 theiaStickySidebar">
                <div class="sidebar-widget widget">
                    <div class="service-amount">
                        <span>$150</span>
                    </div>
                    <div class="service-book">
                        <a href="book-service.html" class="btn btn-primary"> Book Service </a>
                    </div>
                </div>
                <div class="card provider-widget clearfix">
                    <div class="card-body">
                        <h5 class="card-title">Service Provider</h5>
                        <div class="about-author">
                            <div class="about-provider-img">
                                <div class="provider-img-wrap">
                                    <a href="javascript:void(0);">
                                        <img class="img-fluid rounded-circle" alt=""
                                            src="<?=base_url();?>front/img/provider/provider-01.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="provider-details">
                                <a href="javascript:void(0);" class="ser-provider-name">Thomas Herzberg</a>
                                <p class="last-seen"><i class="fas fa-circle online"></i> Online</p>
                                <p class="text-muted mb-1">Member Since Apr 2020</p>
                            </div>
                        </div>
                        <hr>
                        <div class="provider-info">
                            <p class="mb-1"><i class="far fa-envelope"></i> <a href="#"><span class="__cf_email__"
                                        data-cfemail="f7839f989a96849f92858d95928590b7928f969a879b92d994989a">[email&#160;protected]</span></a>
                            </p>
                            <p class="mb-0"><i class="fas fa-phone-alt"></i> xxxxxxxx33</p>
                        </div>
                    </div>
                </div>
                <div class="card available-widget">
                    <div class="card-body">
                        <h5 class="card-title">Service Availability</h5>
                        <ul>
                            <li><span>Monday</span>9:30 AM - 7:00 PM</li>
                            <li><span>Tuesday</span>9:30 AM - 7:00 PM</li>
                            <li><span>Wednesday</span>9:30 AM - 7:00 PM</li>
                            <li><span>Thursday</span>9:30 AM - 7:00 PM</li>
                            <li><span>Friday</span>9:30 AM - 7:00 PM</li>
                            <li><span>Saturday</span>9:30 AM - 7:00 PM</li>
                            <li><span>Sunday</span>9:30 AM - 7:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>﻿

<!-- Footer -->
<?php include 'footerr.php';?>