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
			<div class="tg-breadcrumbarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
						</div>
					</div>
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
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-7 col-md-12 col-lg-12">
							<div id="tg-content" class="tg-content">
								<div class="tg-sectionhead">
									<div class="tg-title">
										<h2>News Articles</h2>
									</div>
									<div class="tg-description">
										<p>Stay Updated With News</p>
									</div>
								</div>
								<div class="row">
									<div class="tg-posts tg-postsgrid">
										<?php foreach ($this->M_news->get_news() as $row) {?>
											
										<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
											<div class="tg-post">
												<figure>
													<span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
													<a href="javascript:void(0);"><img src="<?=base_url();?>uploads/news/<?=$row['image'];?>"></a>
												</figure>
												<div class="tg-postcontent">
													<ul class="tg-postcategories">
														<li><a href="javascript:void(0);"><?=$row['tags'];?></a></li>
													</ul>
													<div class="tg-posttitle">
														<h3><a href="javascript:void(0);"><?=$row['title'];?>/a></h3>
													</div>
													<ul class="tg-postmetadata">
														<li>By: <a href="javascript:void(0);">
															<?=$this->M_user->get_user($row['added_by']);?></a></li>
														
													</ul>
													<div class="tg-description">
														<p><?=$row['body'];?> <a href="<?=base_url();?>home/news_detail/<?=$row['news_id'];?>">read more</a></p>
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
