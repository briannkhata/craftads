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
							<ol class="tg-breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="tg-active">news detail</li>
							</ol>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-right">
							<div id="tg-content" class="tg-content">
								<div class="tg-post tg-detail tg-postdetail">
									<div class="tg-posttitle">
										<h1><?=$this->M_news->get_title($news_id);?></h1>
									</div>
									<ul class="tg-postmetadata">
										<li><time datetime="2011-01-12">
									<?=date('F d Y',strtotime($this->M_news->get_date_added($news_id)));?></time></li>
										<li>By: <a href="javascript:void(0);">
											<?=$this->M_user->get_user($this->M_news->get_added_by($news_id));?></a></li>
									</ul>
									
									<figure>
										<span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
										<img src="<?=base_url();?>uploads/news/
											<?=$this->M_news->get_image($news_id);?>">
									</figure>
									<ul class="tg-postcategories">
										<li><a href="javascript:void(0);">
											<?=$this->M_news->get_tags($news_id);?></a></li>
									</ul>
									<div class="tg-description">
										<p><?=$this->M_news->get_body($news_id);?></p>
									</div>
								</div>
								<div class="tg-author">
									
								</div>
								<div id="tg-comments" class="tg-comments">
									<h2>03 Comments</h2>
									<ul>
										<li>
											<div class="tg-author">
												<figure>
													<a href="javascript:void(0);"><img src="images/author/img-04.jpg" alt="image description"></a>
													<i class="fa fa-bolt"></i>
												</figure>
												<div class="tg-authorcontent">
													<div class="tg-authorhead">
														<div class="tg-boxleft">
															<h3><a href="javascript:void(0);">Lurlene Cashman</a></h3>
															<span>Author Since: June 27, 2017</span>
														</div>
														<div class="tg-boxright">
															<a class="tg-btnreply" href="javascript:void(0);"><i class="fa fa-mail-reply"></i></a>
														</div>
													</div>
													<div class="tg-description">
														<p>Incididunt ut labore elore lokate magna aliqua enim adminim sitae veniam quis nostrud acitation ullamcoaris nisiutia aliquip ex ea commodo consequat aute irure dolor reprehenderit inoluptate velitita esse cillum dolore eu fugiat nulla pariatur enim.</p>
													</div>
												</div>
											</div>
											<ul class="tg-child">
												<li>
													<div class="tg-author">
														<figure><a href="javascript:void(0);"><img src="images/author/img-05.jpg" alt="image description"></a></figure>
														<div class="tg-authorcontent">
															<div class="tg-authorhead">
																<div class="tg-boxleft">
																	<h3><a href="javascript:void(0);">Lurlene Cashman</a></h3>
																	<span>Author Since: June 27, 2017</span>
																</div>
																<div class="tg-boxright">
																	<a class="tg-btnreply" href="javascript:void(0);"><i class="fa fa-mail-reply"></i></a>
																</div>
															</div>
															<div class="tg-description">
																<p>Incididunt ut labore elore lokate magna aliqua enim adminim sitae veniam quis nostrud acitation ullamcoaris nisiutia aliquip ex ea commodo consequat aute irure dolor reprehenderit inoluptate velitita esse cillum dolore eu fugiat nulla pariatur enim.</p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="tg-author">
												<figure><a href="javascript:void(0);"><img src="images/author/img-06.jpg" alt="image description"></a></figure>
												<div class="tg-authorcontent">
													<div class="tg-authorhead">
														<div class="tg-boxleft">
															<h3><a href="javascript:void(0);">Lurlene Cashman</a></h3>
															<span>Author Since: June 27, 2017</span>
														</div>
														<div class="tg-boxright">
															<a class="tg-btnreply" href="javascript:void(0);"><i class="fa fa-mail-reply"></i></a>
														</div>
													</div>
													<div class="tg-description">
														<p>Incididunt ut labore elore lokate magna aliqua enim adminim sitae veniam quis nostrud acitation ullamcoaris nisiutia aliquip ex ea commodo consequat aute irure dolor reprehenderit inoluptate velitita esse cillum dolore eu fugiat nulla pariatur enim.</p>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tg-replaybox">
									<h2>Leave Your Comment</h2>
									<form class="tg-formtheme tg-formreply">
										<fieldset>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group tg-inputwithicon">
														<i class="icon-user"></i>
														<input type="text" name="name" class="form-control" placeholder="Name">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group tg-inputwithicon">
														<i class="icon-envelope"></i>
														<input type="text" name="name" class="form-control" placeholder="Email">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
													<div class="form-group tg-inputwithicon">
														<i class="icon-bullhorn"></i>
														<input type="text" name="name" class="form-control" placeholder="Subject">
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
													<div class="form-group tg-inputwithicon">
														<i class="icon-bubble"></i>
														<textarea class="form-control" placeholder="Comment"></textarea>
													</div>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
													<button class="tg-btn" button="button">Submit</button>
												</div>
											</div>
										</fieldset>
									</form>
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

