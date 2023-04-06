<?php include 'headerr.php';?>

<!-- /Header -->

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-title">
                    <h2>Find a Professional</h2>
                </div>
            </div>
            <div class="col-auto float-end ms-auto breadcrumb-menu">
                <!-- <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
                    </ol>
                </nav> -->
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 theiaStickySidebar">
                <div class="card filter-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Search Filter</h4>
                        <form id="search_form" action="<?=base_url();?>Home/refresh_members" method="post">
                            <div class="filter-widget">
                                <div class="filter-list">
                                    <h4 class="filter-title">Keyword</h4>
                                    <input type="text" class="form-control" name="keyword" id="keyword"
                                        placeholder="What are you looking for?">

                                    <input type="hidden" name="country" id="country">
                                    <input type="hidden" name="city" id="city">
                                    <input type="hidden" name="region_code" id="region_code">
                                </div>
                                <!-- <div class="filter-list">
                                    <h4 class="filter-title">Sort By</h4>
                                    <select class="form-control selectbox select form-select">
                                        <option>Sort By</option>
                                        <option>Price Low to High</option>
                                        <option>Price High to Low</option>
                                        <option>Newest</option>
                                    </select>
                                </div> -->
                                <div class="filter-list">
                                    <h4 class="filter-title">Categories</h4>
                                    <select class="form-control form-control selectbox select form-select"
                                        name="category_id" id="category_id" required>
                                        <option selected disabled>All Categories</option>
                                        <?php foreach($this->M_category->get_categories() as $cat){?>
                                        <option value=" <?=$cat['category_id'];?>"><?=$cat['category'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class=" filter-list">
                                    <h4 class="filter-title">Location</h4>
                                    <input class="form-control" type="text" id="exact_location" name="exact_location"
                                        placeholder=" Search Location">
                                </div>
                            </div>
                            <button class="btn btn-primary pl-5 pr-5 btn-block get_services w-100"
                                type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 col">
                        <h4><span><?=count($this->M_user->get_members());?></span> Services</h4>
                    </div>
                    <div class="col-md-6 col-auto">
                        <div class="view-icons">
                            <a href="javascript:void(0);" class="grid-view active"><i class="fas fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row" id="listo">
                        <?php foreach($this->M_user->get_members() as $u){?>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-widget">
                                <div class="service-img">
                                    <a href="<?=base_url();?>Home/profile/<?=$u['user_id'];?>">

                                        <img class="img-fluid serv-img"
                                            src="<?= (file_exists(base_url().'uploads/users/'.$u['photo'])) ? base_url().'uploads/users/'.$u['photo'] : base_url().'uploads/users/noImage.png' ?>">
                                    </a>

                                    <div class="item-info">
                                        <div class="service-user">

                                            <span class="service-price">Start Price :
                                                <?=number_format($u['start_price'],2);?></span>
                                        </div>
                                        <div class="cate-list">
                                            <a class="bg-yellow"
                                                href="<?=base_url();?>Home/profile/<?=$u['user_id'];?>">
                                                <?=$this->M_category->get_category($u['category_id']);?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="<?=base_url();?>Home/profile/<?=$u['user_id'];?>"><?=$u['name'];?></a>
                                    </h3>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(4.3)</span>
                                    </div>
                                    <div class="user-info">
                                        <div class="row">
                                            <span class="col-auto ser-contact"><i class="fas fa-phone me-1"></i>
                                                <span> <a class=""
                                                        href="https://api.whatsapp.com/send?phone=<?=$u['phone'];?>"
                                                        title="click to send whatsapp message">
                                                        <?=$u['phone'];?></a>
                                                </span>
                                            </span>
                                            <span class="col ser-location">
                                                <span><?=$u['exact_location'];?></span> <i
                                                    class="fas fa-map-marker-alt ms-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>﻿

<!-- Footer -->
<!-- /Footer Top -->

<!-- Footer Bottom -->
<?php include 'footerr.php';?>