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
											<!--div class="form-group tg-inputwithicon">
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
													<select id="category_id">
														<option disabled="" selected="">Select Category</option>
														<?php foreach ($this->M_category->get_categories() as $row) {?>
														
														<option value="<?=$row['category_id'];?>">
															<?=$row['category'];?></option>
													<?php }?>
														
													</select>
												</div>
											</div>
											<button class="tg-btn" type="button">Search Now</button-->
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
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						</div>
						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
							<aside id="tg-sidebar" class="tg-sidebar">
								<form class="tg-formtheme tg-formnerrowsearch">
									<div class="tg-sidebartitle"><h2>Narrow Your Search:</h2></div>
									<fieldset>
										<div id="tg-narrowsearchcollapse" class="tg-themecollapse tg-narrowsearchcollapse">
											<div class="tg-collapsetitle">
												<i class="fa fa-rotate-left"></i>
												<span class="fa fa-angle-down">By Title/Keyword</span>
											</div>
											<div class="tg-themecollapsecontent">
												<div class="form-group tg-inputwithicon">
													<i class="icon-magnifier"></i>
													<input type="search" name="keyword" id="keyword" class="form-control" placeholder="Search Title/Keyword">
												</div>
											</div>
											<div class="tg-collapsetitle">
												<i class="fa fa-rotate-left"></i>
												<span class="fa fa-angle-down">By Category</span>
											</div>
											<div class="tg-themecollapsecontent">
												<div class="form-group">
													<div class="tg-select">
														<select name="category_id" id="category_id">
															<option selected="" disabled="">category</option>
															<?php foreach ($this->M_category->get_categories() as $cat) {?>
															<option value="<?=$cat['category_id'];?>"><?=$cat['category'];?></option>
														<?php }?>
														</select>
													</div>
												</div>
											</div>
											<div class="tg-collapsetitle">
												<i class="fa fa-rotate-left"></i>
												<span class="fa fa-angle-down">By Country</span>
											</div>
											<div class="tg-themecollapsecontent">
												<div class="form-group">
													<div class="tg-select">
														<select name="country_id" id="country_id">
															<option selected="" disabled="">country</option>
															<?php foreach ($this->M_country->get_countries() as $cat) {?>
															<option value="<?=$cat['country_id'];?>"><?=$cat['country'];?></option>
														<?php }?>
														</select>
													</div>
												</div>
											</div>
											<div class="tg-collapsetitle">
												<i class="fa fa-rotate-left"></i>
												<span class="fa fa-angle-down">By District/District</span>
											</div>
											<div class="tg-themecollapsecontent">
												<div class="form-group">
													<div class="tg-select">
														<select name="district_id" id="district_id">
															<option selected="" disabled="">district</option>
															<?php foreach ($this->M_district->get_districts() as $cat) {?>
															<option value="<?=$cat['district_id'];?>"><?=$cat['district'];?></option>
														<?php }?>
														</select>
													</div>
												</div>
											</div>
											<div class="tg-collapsetitle">
												<i class="fa fa-rotate-left"></i>
												<span class="fa fa-angle-down">By Location</span>
											</div>
											<div class="tg-themecollapsecontent">
												<div class="form-group">
													<div class="tg-select">
														<select>
															<option selected="" disabled="">location</option>
															<?php foreach ($this->M_location->get_locations() as $cat) {?>
															<option value="<?=$cat['location_id'];?>"><?=$cat['location'];?></option>
														<?php }?>
														</select>
													</div>
												</div>
											</div>

										</div>
										<button type="button" class="tg-btn" onclick="run_filter()">apply filter</button>
									</fieldset>
								</form>
							</aside>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
							<div id="tg-content" class="tg-content">
								<div class="tg-contenthead">
									<div class="tg-sortandview">
										<div class="tg-sortby">
											<div class="tg-pagehead">
												Craft Ads Listing (<?=$page_title;?>)
											</div>
										</div>
										
										
									</div>
									<div class="tg-applyedfilters">
										
										</ul>
									</div>
								</div>
								<div class="tg-ads">
									<div class="row" id="listo">
										<?php foreach ($this->M_user->get_members_by_category($category_id) as $row) {?>
										
										<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
											<div class="tg-ad tg-verifiedad">
												<figure>
													 <?php if($row['featured'] == 1){?>
                      <span class="tg-themetag tg-featuretag">featured</span>
                    <?php } else{}?>
                    <a href="<?=base_url();?>home/profile/<?=$row['user_id'];?>">
                    	<?php 
		                       if(isset($row['photo'])){?>
									<img src="<?=base_url()."uploads/users/".$row['photo'];?>">
		                       <?php } else {?>
		                      	    <img src="<?=base_url();?>uploads/ph.jfif">
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
								
							</div>
						</div>
					</div>
				</div>
			</div>
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
		function run_filter(){


			$.post("<?=base_url();?>home/refresh_members",
			{
				category_id: $("#category_id").val(),
				 country_id: $("#country_id").val(),
				district_id: $("#district_id").val(),
				location_id: $("#location_id").val(),
				    keywork: $("#keywork").val()
			},
			function(data,status){
				var container = $('#listo'); //jquery selector (get element by id)
				if(data){
	
					container.html('');
					container.html(data);
				}
			});
		}
</script>