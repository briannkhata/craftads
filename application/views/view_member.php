
    <?php $this->load->view('headerr');?>

		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<figure data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%" style="background-image: url('<?=base_url();?>front/banner.jpg');">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-bannercontent">
									<form class="tg-formtheme tg-formbannersearch">
										<fieldset>
											
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
			<!--div class="tg-breadcrumbarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ol class="tg-breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="tg-active"><?=$page_title;?></li>
							</ol>
						</div>
					</div>
				</div>
			</div-->
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->

			<?php 
			$category_id = $this->M_user->get_category_id($user_id);
			foreach ($this->M_user->get_user_by_id($user_id) as $key) {?>
			
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-pricebox">
									<div class="tg-priceandlastupdate">
										<span><?=number_format($key['start_price'],2);?></span>
									</div>
								</div>
								<div class="tg-sellercontactdetail">
									<div class="tg-sellertitle">
										<div class="tg-memberinfo">
												<h3><a href="javascript:void(0);"><?=$key['name'];?></a></h3>
												<span>
													Member Since <?=date('F d, Y',strtotime($key['date_joined']));?> </span>
											</div>
									</div>
									<div class="tg-sellercontact">
										<div class="tg-memberinfobox">
											<a href="javascript:void(0);">
												<?php 
								              if(isset($key['photo'])){?>
												<img src="<?=base_url();?>uploads/users/<?=$key['photo'];?>" class="img-thumbnail" style="margin-left: 4%;" >
												<?php } else {?>
						                      	    <img src="<?=base_url();?>uploads/ph.jfif" class="img-thumbnail" style="margin-left: 10%;">
						                       <?php }?>
											</a>
											
											<div class="tg-memberinfo">
												
											</div>
										</div>
										<a class="tg-btnphone" href="javascript:void(0);" style="padding: 5%; text-align: left;">
											
											<?=$key['phone'];?>
										</a>
										<a class="tg-btnphone" href="mailto:<?=$key['email'];?>" style="padding: 1%; text-align: left;">
												&nbsp;&nbsp;
												<?=$key['email'];?>
										</a>
										<a class="tg-btnphone" href="javascript:void(0);" style="padding: 1%; text-align: left;">
												&nbsp;&nbsp;
												<?=$key['facebook'];?>
										</a>
										<a class="tg-btnphone" href="javascript:void(0);" style="padding: 1%; text-align: left;">
												&nbsp;&nbsp;
												<?=$key['twitter'];?>
										</a>
										<a class="tg-btnphone" href="javascript:void(0);" style="padding: 1%; text-align: left;">
												&nbsp;&nbsp;
												<?=$key['youtube'];?>
										</a>
										<a class="tg-btnphone" href="javascript:void(0);" style="padding: 1%; text-align: left;">
												&nbsp;&nbsp;
										</a>
										<a class="tg-btnmakeanoffer" href="#"style="padding: 2%; text-align: left;">
												&nbsp;&nbsp;
												<?=$key['address'];?>
												<?=$this->M_district->get_district($key['district_id']);?>,
                     						    <?=$this->M_location->get_location($key['location_id']);?>
											
										</a>
										
									</div>
									
								</div>
								<div class="tg-safetytips">
									<div class="tg-safetytipstitle"><h2>Reviews</h2></div>
									<div id="tg-safetytipsslider" class="tg-safetytipsslider slid owl-carousel">
									<?php foreach ($this->M_user->get_user_review($user_id) as $one) {?>
									
										<div class="item tg-safetytip active">
											<h3><?=$one['name'];?></h3>
											<div class="tg-description">
												<p><?=$one['review'];?></p>
											</div>
										</div>
									<?php }?>
										

										<?php foreach ($this->M_user->get_user_reviews($user_id) as $value) {?>
										<div class="item tg-safetytip">
											<h3><?=$value['name'];?></h3>
											<div class="tg-description">
												<p><?=$value['review'];?></p>
											</div>
										</div>
									<?php }?>

									</div>
									<div id="tg-currentandtotalslides" class="tg-currentandtotalslides"></div>
								</div>
								<div class="tg-reportthisadbox">
									<div class="tg-reportthisadtitle">
										<h2>Add Review</h2>
									</div>
									<form class="tg-formtheme tg-formreportthisad" id="add_review">
											<fieldset>
										
											<div class="form-group tg-inputwithicon">
												<input type="text" name="name" id="name" placeholder="Your name" class="form-control">
												<input type="hidden" name="user_id" id="user_id" value="<?=$user_id;?>">
											</div>
											<div class="form-group tg-inputwithicon">
												<textarea class="form-control" name="review" id="review" placeholder="Write your review"></textarea>
											</div>
											<div class="tg-btns">
												<button class="tg-btn" type="button" onclick="add_review()">Add Review</button>
												<button class="tg-btn" type="button" onclick="clearfields()">Cancel</button>
											</div>
										</fieldset>
									</form>
								</div>
							</aside>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
							<div id="tg-content" class="tg-content">
								<div class="tg-ad tg-verifiedad tg-detail tg-addetail">
									<div class="tg-adcontent">
										<ul class="tg-pagesequence">
										</ul>
										<!--div class="tg-adtitle" style="font-weight: bold;">
											<h2><?=$key['profession'];?></h2>
										</div-->
										
									</div>
								
									<div class="tg-description">
											<div class="" style="font-weight: bold;">
											<h3>ABOUT ME</h3>
										</div>

										<p><b><?=$key['tagline'];?></b></p>
										<p><?=$key['details'];?></p>
									</div>
								</div>

										

<div class="tg-adtitle" style="font-weight: bold;">
											<h3>REFERENCES</h3>
										</div>
<div class="tg-ad tg-verifiedad tg-detail tg-addetail">
	<hr>
				<?php foreach ($this->M_referee->get_user_referees($user_id) as $ham) {?>
					<p style="border-bottom: 1px solid;"><?=$ham['referee'];?></p>
					
									

										
											
									<?php }?>

								</div>
						
								<!--div di class="tg-authorotherads">

									<div class="tg-sectionhead">
										<div class="tg-title">
											<h2>Similar Categories</h2>
										</div>
										<div class="tg-description">
											<p></p>
										</div>
									</div>
									<div id="tg-authoradsslider" class="tg-ads tg-adsvtwo tg-authoradsslider owl-carousel">

								<?php foreach ($this->M_user->get_users_by_categorydd($category_id,$user_id) as $cate) {?>
										
										<div class="tg-ad tg-verifiedad item">
											<figure>
												    <?php if($cate['featured'] == 1){?>
													   <span class="tg-themetag tg-featuretag">featured</span>
												    <?php }?>
													<a href="<?=base_url();?>home/profile/<?=$cate['user_id'];?>">
														<?php 
								                       if(isset($cate['photo'])){?>
															<img src="<?=base_url()."uploads/users/".$cate['photo'];?>">
								                       <?php } else {?>
								                      	    <img src="<?=base_url();?>uploads/ph.jfif">
								                       <?php }?>
													</a>
											</figure>
											<div class="tg-adcontent">
												<ul class="tg-productcagegories">
													<li><a href="javascript:void(0);">
														<?=$this->M_category->get_category($cate['category_id']);?>
													</a></li>
												</ul>
												<div class="tg-adtitle">
													<h3><a href="<?=base_url();?>home/profile/<?=$cate['user_id'];?>"><?=$cate['name'];?></a></h3>
												</div>
                   					  <div class="tg-adprice">
                   					 	<h4>Price $<?=number_format($cate['start_price'],2);?></h4></div>
											<address><?=$cate['address'];?></address>
						                    <address><?=$this->M_district->get_district($cate['district_id']);?>,
						                      <?=$this->M_location->get_location($cate['location_id']);?></address>
													<div class="tg-phonelike">
										                <a class="tg-btnphone" href="https://api.whatsapp.com/send?phone=<?=$cate['phone'];?>">
										                    <?=$cate['phone'];?>
										                </a>
						                    		</div>

						                     <div class="tg-phonelike" style="margin-top: 1%;">
						                       <a href="mailto:<?=$cate['email'];?>" class="tg-btnphone">
						                        <?=$cate['email'];?>
						                      </a>
						                    </div>
											</div>
										</div>
									<?php }?>

									</div>
								</div-->
							</div>

							<div>
								<div class="lightbox">
								  <div class="row">
						<?php foreach ($this->M_image->get_user_images($user_id) as $row){?>

								    <div class="col-lg-6" style="padding: 2%; text-overflow: ellipsis;">
								      <img
								        src="<?=base_url();?>uploads/users/<?=$row['image'];?>"
								        data-mdb-img="<?=base_url();?>uploads/users/<?=$row['image'];?>"
								        alt="<?=$row['title'];?>"
								        class="w-100 mb-2 mb-md-4 shadow-1-strong rounded"
								      />
								      <span style="text-overflow:ellipsis; padding: 1%;"><?=$row['title'];?></span>
								   
								    </div>
								<?php }?>
								 
							</div>
						</div>
						<!--div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-youmayalsolike">
								<div class="tg-viewallbox">
									 <a class="tg-btn" href="<?=base_url();?>home/craftads">View All</a>
									</div>
								</div>
							</div-->
						</div>
					</div>
				</div>
			</div>
		<?php }?>
			<!--************************************
					About Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<?php $this->load->view('footerr');?>
		<script type="text/javascript">
			function add_review(){
				try
				{

					if(document.getElementById("name").value =='' || document.getElementById("review").value ==''){
						alert('Please both fill name and your review fields');
					}else{

					$.post("<?=base_url();?>home/add_review",
					{
						  name: document.getElementById("name").value,
					   user_id: document.getElementById("user_id").value,
						review: document.getElementById("review").value
					},
					function(data,status){
						alert('Your review,successfully submited');
						location.reload();
					});
				}
			}
				catch(err)
				{
					//Clear 
					alert(err);
				}
			}

			function clearfields(){
				document.getElementById("add_review").reset();
			}
		</script>