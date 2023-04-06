               <?php foreach ($members as $row) {?>
                <div class="col-md-12">
                  <div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
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
														<li><a href="javascript:void(0);">
															<?=$this->M_category->get_category($row['category_id']);?></a></li>
													</ul>
													<div class="tg-adtitle">
														<h3><a href="<?=base_url();?>home/profile/<?=$row['user_id'];?>"><?=$row['name'];?></a></h3>
													</div>
                    <div class="tg-adprice"><h4>$<?=number_format($row['start_price'],2);?></h4></div>
													<address><?=$row['address'];?> </address>
                    <address><?=$this->M_district->get_district($row['district_id']);?>,
                      <?=$this->M_location->get_location($row['location_id']);?></address>
                    <div class="">
                      <a class="" href="https://api.whatsapp.com/send?phone=<?=$row['phone'];?>">
                        <?=$row['phone'];?>
                      </a>
                    </div>

                     <div class="" style="margin-top: 1%;">
                       <a href="mailto:<?=$row['email'];?>" class="">
                        <?=$row['email'];?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
                <?php }?>