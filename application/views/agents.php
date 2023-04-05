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
								<li class="tg-active">Craft Ads listing</li>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="border-bottom: 1px solid #e2d3d3;">
							<h3>Craft Ads Nework Agents</h3>
						</div>

						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-content" class="tg-content">
								
								<div class="tg-ads">
									<div class="row" id="listo">
										<?php foreach ($this->M_user->get_agents() as $row) {?>
										
										<div class="col-xs-6 col-sm-12 col-md-6 col-lg-3 tg-verticaltop">
											<div class="tg-ad tg-verifiedad">
												<figure>
                     

		                    <a href="<?=base_url();?>home/view_member/<?=$row['user_id'];?>">
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
														<li><a href="javascript:void(0);"></a>
														</li>
													</ul>
													<div class="tg-adtitle">
														<h3><a href=""><?=$row['name'];?></a></h3>
													</div>
                    <div><h4></h4></div>
					<span><?=$row['address'];?> </span>
                    <span><?=$this->M_district->get_district($row['district_id']);?>,
                      <?=$this->M_location->get_location($row['location_id']);?></span>
                    <div>
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