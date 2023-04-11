<?php include 'headerr.php';?>

<?php foreach($this->M_user->get_user_by_id($user_id) as $su){?>
<div class="container" style="padding-top:3%;">
    <div class="row">
        <div class="col-lg-8">
            <div class="service-view">
                <div class="service-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1><?=$su['name'];?></h1>
                        <small><?=$su['tagline'];?></small>
                    </div>
                    <hr>
                    <input type="hidden" id="imgURL"
                        value="<?=base_url().'uploads/gallery'.$this->M_image->get_imageRANDOM($user_id);?>">

                    <address class="service-location"><i class="fas fa-location-arrow"></i>
                        <?=$su['city'];?> , <?=$su['exact_location'];?></address>
                    <div class=" rating">
                        <?php
                                            $empty_star = '<i class="fas fa-star"></i>';
                                            $full_star = '<i class="fas fa-star filled"></i>';
                                            $num_stars = 5 - $su['rating'];
                                            
                                            for ($i = 0; $i < $su['rating']; $i++) {
                                                echo $full_star;
                                            }
                                            
                                            for ($i = 0; $i < $num_stars; $i++) {
                                                echo $empty_star;
                                            }
                                            ?>
                        <span class="d-inline-block average-rating"></span>
                    </div>
                    <div class="service-cate">
                        <a href="#"><?=$su['profession'];?></a>
                    </div>
                </div>
                <div class="service-images service-carousel">
                    <div class="images-carousel owl-carousel owl-theme">
                        <?php 
                                if(count($this->M_image->get_user_images($user_id)) > 0) {
                                    foreach($this->M_image->get_user_images($user_id) as $ui) {
                            ?>
                        <div class="item">
                            <img class="img-fluid" src="<?= base_url().'uploads/gallery/'.$ui['image'];?>">

                        </div>
                        <?php
                                    }
                                } else {
                                    ?>
                        <div class="item">
                            <img class="img-fluid" src="<?= base_url().'uploads/users/noImage.png';?>">

                        </div>
                        <?php
                                }
                            ?>


                    </div>
                </div>
                <div class="service-details">
                    <!-- <ul class="nav nav-pills service-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Services Offered</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-book-tab" data-toggle="pill" href="#pills-book" role="tab"
                                    aria-controls="pills-book" aria-selected="false">Reviews</a>
                            </li>
                        </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="card service-description">
                                <div class="card-body">
                                    <h5 class="card-title">About</h5>
                                    <hr>
                                    <p class="mb-0"><?=$su['details'];?></p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Skills or Services</h5>
                                    <hr>
                                    <div class="service-offer">
                                        <ul class="list-bullet">
                                            <?php foreach($this->M_skill->get_skill_by_user($user_id) as $sk){?>
                                            <li>
                                                <?=$sk['skill'];?>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Previous Works</h5>
                                    <hr>
                                    <div class="service-offer">
                                        <ul class="list-bullet">
                                            <?php foreach($this->M_referee->get_user_referees($user_id) as $ref){?>
                                            <li>
                                                <?=$ref['referee'];?> ` <i><?=$ref['job'];?></i>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Services Offered</h5>
                                        <div class="service-offer">
                                            <ul class="list-bullet">
                                                <?php foreach($this->M_skill->get_skills() as $sk){?>
                                                <li>
                                                    <?=$sk['skill'];?>
                                                </li>
                                                <?php } ?>
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
                            </div> -->
                    </div>
                </div>

            </div>
            <h4 class="card-title">Similar Services</h4>
            <hr>

            <?php
                $country = $this->M_location->get_current_country();
                $region_code = $this->M_location->get_current_region_code();
                $city = $this->M_location->get_current_city();
            ?>
            <div class="service-carousel">
                <div class="popular-slider owl-carousel owl-theme">
                    <?php foreach($this->M_user->get_similar_members($category_id,$country ,$region_code,$city,$user_id) as $uc){?>
                    <div class="service-widget">
                        <div class="service-img">
                            <a href="<?=base_url();?>Home/profile/<?=$uc['user_id'];?>">
                                <?php 
                                    $image = $this->M_image->get_imageRANDOM($uc['user_id']);
                                     if($image == ""){?>
                                <img class="img-fluid serv-img" src="<?= base_url().'uploads/users/noImage.png';?>">
                                <?php }else{?>

                                <img class="img-fluid serv-img" src="<?= base_url().'uploads/gallery/'.$image;?>">

                                <?php } ?>
                            </a>
                            <div class="item-info">
                                <div class="service-user">

                                    <span class="service-price">
                                        <?=$this->M_location->get_current_currency();?>
                                        : <?=number_format($uc['start_price'],2);?></span>
                                </div>
                                <div class="cate-list">
                                    <a class="bg-yellow" href="<?=base_url();?>Home/profile/<?=$uc['user_id'];?>">
                                        <?=$uc['profession'];?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="service-content">
                            <h3 class="title">
                                <a href="<?=base_url();?>Home/profile/<?=$uc['user_id'];?>"><?=$uc['name'];?></a>
                            </h3>
                            <div class="rating">
                                <?php
                                            $empty_star = '<i class="fas fa-star"></i>';
                                            $full_star = '<i class="fas fa-star filled"></i>';
                                            $num_stars = 5 - $uc['rating'];
                                            
                                            for ($i = 0; $i < $uc['rating']; $i++) {
                                                echo $full_star;
                                            }
                                            
                                            for ($i = 0; $i < $num_stars; $i++) {
                                                echo $empty_star;
                                            }
                                            ?>
                                <span class="d-inline-block average-rating"></span>
                            </div>
                            <div class="user-info">
                                <div class="row">
                                    <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                        <span> <a class="" href="https://api.whatsapp.com/send?phone=<?=$uc['phone'];?>"
                                                title="click to send whatsapp message">
                                                <?=$uc['phone'];?></a>
                                        </span>
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>


                </div>
            </div>
        </div>
        <div class="col-lg-4 theiaStickySidebar">
            <div class="sidebar-widget widget">
                <div class="service-amount">
                    <span> <?=$this->M_location->get_current_currency();?> :
                        <?=number_format($su['start_price'],2);?></span>
                </div>
                <div class="service-book">
                    <a href="https://api.whatsapp.com/send?phone=<?=$su['phone'];?>" class="btn btn-primary">
                        Book
                        Service </a>
                </div>
            </div>
            <div class="card provider-widget clearfix">
                <div class="card-body">

                    <div class="provider-info">
                        <p class="mb-1"><i class="far fa-envelope"></i> <span><?=$su['email'];?></span>
                        </p>
                    </div>
                    <br>
                    <div class="provider-info">
                        <p class="mb-0"><i class="fas fa-phone-alt"></i> <?=$su['phone'];?></p>
                    </div>
                </div>

                <div class="card-body">

                    <div class="provider-info">
                        <p class="mb-1"><i class="far fa-location"></i>
                            <span><?=strip_tags($su['address']);?></span>
                        </p>
                    </div>

                </div>
            </div>

            <style>
            #share-container span {
                display: block;
                margin: 3rem auto;
                font-size: 50px;
                padding: 1rem;
                margin: 1rem;
            }

            #share-buttons i {
                font-size: 100px;
                margin: 20px;
            }

            .facebook {
                color: #3b5998;
            }

            .twitter {
                color: #55acee;
            }

            .linkedin {
                color: #0077b5;
            }

            .reddit {
                color: #cb2027;
            }

            .whatsapp {
                color: #25D366;
            }

            .telegram {
                color: #229ED9;
            }

            .facebook,
            .twitter,
            .linkedin,
            .reddit,
            .whatsapp,
            .telegram {
                opacity: 0.6;
            }

            .facebook:hover,
            .twitter:hover,
            .linkedin:hover,
            .reddit:hover,
            .whatsapp:hover,
            .telegram:hover {
                opacity: 0.9;
            }
            </style>

            <div class="card available-widget">
                <div class="card-body">
                    <div id="share-buttons">

                        <!-- facebook -->
                        <a class="facebook" target="blank"><i class="fab fa-facebook"></i></a>

                        <!-- twitter -->
                        <a class="twitter" target="blank"><i class="fab fa-twitter"></i></a>

                        <!-- linkedin -->
                        <a class="linkedin" target="blank"><i class="fab fa-linkedin"></i></a>

                        <!-- reddit -->
                        <a class="reddit" target="blank"><i class="fab fa-reddit"></i></a>

                        <!-- whatsapp-->
                        <a class="whatsapp" target="blank"><i class="fab fa-whatsapp"></i></a>

                        <!-- telegram-->
                        <a class="telegram" target="blank"><i class="fab fa-telegram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
</div>﻿


<!-- Footer -->
<?php include 'footerr.php';?>

<script>
let currentUrl = window.location.href;
let imgURL = $("#imgURL").val();
currentUrl += '?image=' + encodeURIComponent(imgURL);

const link = encodeURI(currentUrl);
const msg = encodeURIComponent('Hello everyone, Checkout my Account on CraftAds Network');
const title = encodeURIComponent('Please get me for any job oppotunities');

const fb = document.querySelector('.facebook');
fb.href = `https://www.facebook.com/share.php?u=${link}`;

const twitter = document.querySelector('.twitter');
twitter.href = `http://twitter.com/share?&url=${link}&text=${msg}&hashtags=javascript,programming`;

const linkedIn = document.querySelector('.linkedin');
linkedIn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;

const reddit = document.querySelector('.reddit');
reddit.href = `http://www.reddit.com/submit?url=${link}&title=${title}`;

const whatsapp = document.querySelector('.whatsapp');
whatsapp.href = `https://api.whatsapp.com/send?text=${msg}: ${link}`;

const telegram = document.querySelector('.telegram');
telegram.href = `https://telegram.me/share/url?url=${link}&text=${msg}`;
</script>