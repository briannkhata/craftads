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
			<div class="tg-breadcrumbarea">
				<div class="container">
					<!--div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						</div>
					</div-->
				</div>
			</div>
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
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-aboutus">
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-6">
								<div class="tg-textshortcode">
									<div class="tg-titleshortcode">
										<h2><span>Welcome!</span>Know more about us</h2>
									</div>
									<div class="tg-description">
										<p>
											<?=$this->db->get('settings')->row()->about;?>
										</p>
									</div>
									<div class="tg-btnbox">
										<a class="tg-btn" href="<?=base_url();?>home/join">Join</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
								<div class="tg-imgshortcode tg-multiimg">
									<figure><div class="tg-imgholder">
										<img src="<?=base_url();?>uploads/about/
										<?=$this->db->get('settings')->row()->image;?>"></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Latest Posted Ads Start
			*************************************-->
			<section class="tg-sectionspace tg-bglight tg-haslayout">
				<div class="container">
					<div class="row">
						<ul class="tg-statistics">
							<li>
								<div class="tg-statisticicon"><i class="icon-smile"></i></div>
								<h3 data-from="0" data-to="246321" data-speed="8000" data-refresh-interval="50">246321</h3>
								<h4>Locations</h4>
							</li>
							<li>
								<div class="tg-statisticicon"><i class="icon-user"></i></div>
								<h3 data-from="0" data-to="423156" data-speed="8000" data-refresh-interval="50">423156</h3>
								<h4>Active Members</h4>
							</li>
							<li>
								<div class="tg-statisticicon"><i class="icon-bookmark"></i></div>
								<h3 data-from="0" data-to="24" data-speed="8000" data-refresh-interval="50">24</h3>
								<h4>Countries</h4>
							</li>
							<li>
								<div class="tg-statisticicon"><i class="icon-coffee-cup"></i></div>
								<h3 data-from="0" data-to="74231" data-speed="8000" data-refresh-interval="50">74231</h3>
								<h4>Categories</h4>
							</li>
						</ul>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
							<div class="tg-sectionhead tg-sectionheadvtwo">
								<div class="tg-title">
									<h2>Why We Are Best</h2>
								</div>
								<div class="tg-description">
									<p>We are geared to providing the skilled a lifetime opportunity to put themselves on the world stage while making life easy for their prospective employers and contractors</p>
								</div>
							</div>
						</div>
						<div class="tg-features">
							<li>
								<div class="tg-feature">
									<div class="tg-featureicon"><i class="icon-eye"></i></div>
									<div class="tg-title"><h3><a href="javascript:void(0);">Eye on Quality</a></h3></div>
									<div class="tg-description">
										<p>We only grant membership to the craftsmen who are qualified in what they do</p>
									</div>
								</div>
							</li>
							<li>
								<div class="tg-feature">
									<div class="tg-featureicon"><i class="icon-lock"></i></div>
									<div class="tg-title"><h3><a href="javascript:void(0);">Protection Guaranteed</a></h3></div>
									<div class="tg-description">
										<p>If you get services from our members, you are guaranteed that they wont stole from you.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="tg-feature">
									<div class="tg-featureicon"><i class="icon-bubble"></i></div>
									<div class="tg-title"><h3><a href="javascript:void(0);">Active Support</a></h3></div>
									<div class="tg-description">
										<p>We support the members by advrtising them aswell as directing our users to services at the right time.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="tg-feature">
									<div class="tg-featureicon"><i class="icon-laptop"></i></div>
									<div class="tg-title"><h3><a href="javascript:void(0);">Prompt Complaint Response</a></h3></div>
									<div class="tg-description">
										<p>If you contact through any channel listed,we instantly respond to you</p>
									</div>
								</div>
							</li>
							<li>
								<div class="tg-feature">
									<div class="tg-featureicon"><i class="icon-spell-check"></i></div>
									<div class="tg-title"><h3><a href="javascript:void(0);">Verified Members</a></h3></div>
									<div class="tg-description">
										<p>We only register the verified and fully qualified members who will make you happy after wirking with you</p>
									</div>
								</div>
							</li>
							<li>
								<div class="tg-feature">
									<div class="tg-featureicon"><i class="icon-leaf"></i></div>
									<div class="tg-title"><h3><a href="javascript:void(0);">Membership Reviews</a></h3></div>
									<div class="tg-description">
										<p>After our member has worked for you, we give you room to write a review for them</p>
									</div>
								</div>
							</li>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					News Article End
			*************************************-->
			<!--************************************
					Quality Services Start
			*************************************-->
			<section class="tg-bglight tg-haslayout">
				<div class="container-fluid">
					<div class="row">
						<div class="tg-qualityservices">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-imgshortcode">
										<figure>
											<img src="<?=base_url();?>front/images/img-01.jpg" alt="image description">
											<figcaption><a class="tg-btnplayvideo" href="javascript:void"><i class="icon-play3"></i></a></figcaption>
										</figure>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="row">
									<div class="tg-textshortcode">
										<div class="tg-titleshortcode">
											<h2>Serving Quality Services</h2>
										</div>
										<div class="tg-description">
											<p>As one way of promoting and marketing the platform to the general public, the company advertises in all social media platforms such as Facebook, WhatsApp. In addition to that, the company also advertises in other media e.g. Newspaper, Radio and TV stations for a wide coverage</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Quality Services End
			*************************************-->
			<!--************************************
					Partners Start
			*************************************-->
			<!--section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
							<div class="tg-sectionhead tg-sectionheadvtwo">
								<div class="tg-title">
									<h2>Team Behind Classified Pro</h2>
								</div>
								<div class="tg-description">
									<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ea commodo consequat.</p>
								</div>
							</div>
						</div>
						<div class="tg-teamclassified">
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-01.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Esteban Defelice</a></h3>
										<h4>Founder &amp; C.E.O</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-02.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Colin Renshaw</a></h3>
										<h4>Chief Product Officer</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-03.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Cornell Cullens</a></h3>
										<h4>Chief Technology Officer</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-04.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Cheryle Epperly</a></h3>
										<h4>Investment Officer</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-05.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Arnoldo Charpentier</a></h3>
										<h4>Sr. Creative Designer</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-06.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Johnie Ralphs</a></h3>
										<h4>Sr. Web Developer</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-07.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Chanelle Sudderth</a></h3>
										<h4>Content Writer</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-08.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Federico Danko</a></h3>
										<h4>Sr. Regional Manager</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-09.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Macie Guntrum</a></h3>
										<h4>Regional Manager</h4>
									</div>
								</div>
							</div>
							<div class="tg-team">
								<div class="tg-teamholder">
									<figure>
										<a href="javascript:void(0);"><img src="<?=base_url();?>front/images/team/img-10.jpg" alt="image description"></a>
										<figcaption>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</figcaption>
									</figure>
									<div class="tg-teamcontent">
										<h3><a href="javascript:void(0);">Lurlene Cashman</a></h3>
										<h4>Receptionist</h4>
									</div>
								</div>
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
