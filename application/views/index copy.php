<?php $this->load->view('headerr');?>

  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <!--************************************
      Wrapper Start
  *************************************-->

    <!--************************************
        Header End
    *************************************-->
    <!--************************************
        Home Slider Start
    *************************************-->
    <div id="tg-homebanner" class="tg-homebanner tg-haslayout">
      <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%" style="background-image: url('<?=base_url();?>uploads/bannerhome.png'); background-position: center;">
        <figcaption>
          <div class="container">
            <div class="row">
              <div class="col-xs-12 co-sm-12 col-md-12 col-lg-12">
                <div class="tg-bannercontent">
                  <h1>Largest marketplace for your skill</h1>
                  <h2>Search from the skilled service providers</h2>
                  <!--form class="tg-formtheme tg-formbannersearch">
                    <fieldset>
                      <div class="form-group tg-inputwithicon">
                        <i class="icon-bullhorn"></i>
                        <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                      </div>
                      <div class="form-group tg-inputwithicon">
                        <i class="icon-location"></i>
                        <a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
                        <input type="text" name="yourlocation" class="form-control" placeholder="Your Location">
                      </div>
                      <div class="form-group tg-inputwithicon">
                        <i class="icon-layers"></i>
                        <div class="tg-select">
                          <select>
                            <option value="none">Select Category</option>
                            <?php foreach ($this->M_category->get_categories() as $row) {?>
                              <option value="none"><?=$row['category'];?></option>
                            <?php }?>
                          </select>
                        </div>
                      </div>
                      <button class="tg-btn" type="button">Search Now</button>
                    </fieldset>
                  </form-->
                </div>
              </div>
            </div>
          </div>
        </figcaption>
      </figure>
    </div>
    <!--************************************
        Home Slider End
    *************************************-->
    <!--************************************
        Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
      <!--************************************
          Categories Search Start
      *************************************-->
      <section class="tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
              <div class="tg-categoriessearch">
                <div class="tg-title">
                  <h2><span>Categories</h2>
                </div>
                <div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
                  <?php foreach ($this->M_category->get_categories() as $row) {?>
                   
                    <div class="tg-category">
                      <div class="tg-categoryholder">
                          <a href="<?=base_url();?>home/view_category/<?=$row['category_id'];?>">
                          <img src="<?=base_url();?>uploads/categories/<?=$row['image'];?>" alt="<?=$row['category'];?>">
                      
                        </a>
                        <h3><a href="<?=base_url();?>home/view_category/<?=$row['category_id'];?>"><?=$row['category'];?></a></h3>
                      </div>
                    </div>

                   <?php }?>
                
                 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--************************************
          Categories Search End
      *************************************-->
      <!--************************************
          Featured Ads Start
      *************************************-->
      <section class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="tg-sectionhead">
                <div class="tg-title">
                  <h2>Featured Craft Ads</h2>
                </div>
                <div class="tg-description">
                  <p>Featured Craft Ads</p>
                </div>
              </div>
            </div>
            <div class="tg-ads">
              <?php foreach ($this->M_user->get_featured_members_eight() as $row) {?>
              <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                <div class="tg-ad tg-verifiedad">
                  <figure>
                    <?php if($row['featured'] == 1){?>
                      <span class="tg-themetag tg-featuretag">featured</span>
                    <?php }?>
                     <a href="<?=base_url();?>home/profile/<?=$row['user_id'];?>">
                    <?php 
                           if(isset($row['photo'])){?>
                  <img src="<?=base_url()."uploads/users/".$row['photo'];?>" alt="<?=$row['name'];?>">
                           <?php } else {?>
                                <img src="<?=base_url();?>uploads/ph.jfif" alt="<?=$row['name'];?>">
                           <?php }?>
                    </a>
                  </figure>
                  <div class="tg-adcontent">
                    <ul class="tg-productcagegories">
                      <li><a href="javascript:void(0);"><?=$this->M_category->get_category($row['category_id']);?></a></li>
                    </ul>
                    <div class="tg-adtitle">
                      <h3><a href="<?=base_url();?>home/profile/<?=$row['user_id'];?>"><?=$row['name'];?></a></h3>
                    </div>
                    <div class="tg-adprice"><h4>$<?=number_format($row['start_price'],2);?></h4></div>
                    <span><?=$row['address'];?> </span>
                    <span><?=$this->M_district->get_district($row['district_id']);?>,
                      <?=$this->M_location->get_location($row['location_id']);?></span>
                    <div class="">
                      <a class="" href="https://api.whatsapp.com/send?phone=<?=$row['phone'];?>" title="click to send whatsapp message">
                        <?=$row['phone'];?>
                      </a>
                    </div>

                     <div class="" style="margin-top: 1%;">
                       <a href="mailto:<?=$row['email'];?>" class="" title="click to send email">
                        <?=$row['email'];?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
             
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="tg-btnbox">
                <a class="tg-btn" href="<?=base_url();?>home/featured_craftads">View All</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--************************************
          Featured Ads End
      *************************************-->
      <!--************************************
          Latest Posted Ads Start
      *************************************-->
      <section class="tg-sectionspace tg-bglight tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="tg-sectionhead">
                <div class="tg-title">
                  <h2>Latest Added Craft Ads</h2>
                </div>
                <div class="tg-description">
                  <p>Recently joined Craft Ads</p>
                </div>
              </div>
            </div>
            <div class="tg-ads tg-adsvtwo">
            <?php foreach ($this->M_user->get_latest_members_six() as $value) {?>
              
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="tg-ad tg-verifiedad">
                  <figure>
                    <?php if($value['featured'] == 1){?>
                      <span class="tg-themetag tg-featuretag">featured</span>
                    <?php }else{}?>
                    <a href="<?=base_url();?>home/profile/<?=$value['user_id'];?>">
                     <?php 
                           if(isset($value['photo'])){?>
                  <img src="<?=base_url()."uploads/users/".$value['photo'];?>" alt="<?=$value['name'];?>">
                           <?php } else {?>
                                <img src="<?=base_url();?>uploads/ph.jfif" alt="<?=$value['name'];?>">
                           <?php }?>
                    </a>
                  </figure>
                  <div class="tg-adcontent">
                    <ul class="tg-productcagegories">
                      <li><a href="javascript:void(0);">
                        <?=$this->M_category->get_category($value['category_id']);?></a></li>
                    </ul>
                    <div class="tg-adtitle">
                      <h3><a href="<?=base_url();?>home/profile/<?=$value['user_id'];?>"><?=$value['name'];?></a></h3>
                    </div>
                    <div class="tg-adprice"><h4>$<?=number_format($value['start_price'],2);?></h4></div>
                    <span><?=$value['address'];?> </span>
                    <span><?=$this->M_district->get_district($value['district_id']);?>,
                      <?=$this->M_location->get_location($value['location_id']);?></span>
                    <div class="">
                      <a class="" href="https://api.whatsapp.com/send?phone=<?=$value['phone'];?>" title="click to send whatsapp message">
                        <?=$value['phone'];?>
                      </a>
                    </div>

                     <div class="" style="margin-top: 1%;">
                       <a href="mailto:<?=$value['email'];?>" class="" title="click to send email">
                        <?=$value['email'];?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="tg-btnbox">
                <a class="tg-btn" href="<?=base_url();?>home/craftads">View All</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--************************************
          Latest Posted Ads End
      *************************************-->
      <!--************************************
          News Article Start
      *************************************-->
      <section class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="tg-sectionhead">
                <div class="tg-title">
                  <h2>News Articles</h2>
                </div>
                <div class="tg-description">
                  <p>Stay Updated With News</p>
                </div>
              </div>
            </div>
            <div class="tg-posts">
              <?php foreach ($this->M_news->get_news_three() as $roww) {?>
            
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
                <div class="tg-post">
                  <figure>
                    <span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
                    <a href="javascript:void(0);"><img src="<?=base_url();?>uploads/news/<?=$roww['image'];?>"></a>
                  </figure>
                  <div class="tg-postcontent">
                    <ul class="tg-postcategories">
                      <li><a href="javascript:void(0);"><?=$roww['tags'];?></a></li>
                    </ul>
                    <div class="tg-posttitle">
                      <h3><a href="<?=base_url();?>home/view_news/<?=$roww['news_id'];?>"><?=$roww['title'];?></a></h3>
                    </div>
                    <ul class="tg-postmetadata">
                      <li>By: <a href="javascript:void(0);"><?=$this->M_user->get_user($roww['added_by']);?></a></li>
                      <!--li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li-->
                    </ul>
                    <div class="tg-description">
                      <p><?=substr($roww['body'],0,80);?>... <a href="<?=base_url();?>home/view_news/<?=$roww['news_id'];?>">read more</a></p>
                    </div>
                  </div>
                </div>
              </div>

            <?php }?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="tg-btnbox">
                <a class="tg-btn" href="<?=base_url();?>home/news">View All</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--************************************
          News Article End
      *************************************-->
      <!--************************************
          Testimonials Start
      *************************************-->
      <section class="tg-sectionspace tg-bglight tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div id="tg-testimonialsslider" class="tg-testimonials tg-testimonialsslider owl-carousel">
              <?php foreach ($this->M_testimony->get_testimonies() as $key) {?>
               
                <div class="item">
                  <div class="tg-testimonial">
                    <figure >
                      <img src="<?=base_url();?>uploads/users/<?=$this->M_user->get_photo($key['user_id']);?>" alt="<?=$this->M_user->get_user($key['user_id']);?>" style="width: 92px; height: 92px;">
                    </figure>
                    <div class="tg-contentbox">
                      <h2><a href="<?=base_url();?>home/profile/<?=$key['user_id'];?>"><?=$this->M_user->get_user($key['user_id']);?></a></h2>
                      <div class="tg-description">
                        <p><?=$key['testimony'];?></p>
                      </div>
                      <h3><?=$this->M_user->get_profession($key['user_id']);?></h3>
                    </div>
                  </div>
                </div>
              <?php }?>
              
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--************************************
          Testimonials End
      *************************************-->
      <!--************************************
          Partners Start
      *************************************-->
      <!--section class="tg-sectionspace tg-haslayout">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div id="tg-brandsslider" class="tg-brands tg-brandsslider owl-carousel">
                <figure class="item"><img src="<?=base_url();?>front/images/brands/img-01.png" alt="image description"></figure>
                <figure class="item"><img src="<?=base_url();?>front/images/brands/img-02.png" alt="image description"></figure>
                <figure class="item"><img src="<?=base_url();?>front/images/brands/img-03.png" alt="image description"></figure>
                <figure class="item"><img src="<?=base_url();?>front/images/brands/img-04.png" alt="image description"></figure>
              </div>
            </div>
          </div>
        </div>
      </section-->
      <!--************************************
          Partners End
      *************************************-->
    </main>
    <!--************************************
        Main End
    *************************************-->
    <!--************************************
        Footer Start
    *************************************-->
    <?php $this->load->view('footerr');?>
