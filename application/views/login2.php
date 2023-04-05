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
			<div class="container">
				<div class="row">
					<div id="tg-content" class="tg-content">
						<div class="tg-loginsignup" style="padding: 4%;margin-top: -8%;">
								
								<div class="tg-title">
									<h2>Login</h2>
								</div>
								<div class="tg-haslayout">
									<div class="row">
										<?php if ($this->session->flashdata('message2')) { ?>
														<div class="alert alert-info fade in">
															<a href="#" class="close" data-dismiss="alert">&times;</a>
															   <center>
															   	<?=$this->session->flashdata('message2'); ?> </center>
														</div>
													<?php } ?>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
											<form class="tg-formtheme tg-formregister" action="<?=base_url();?>login/signin" method="post">
												<fieldset>
													<div class="form-group tg-inputwithicon">
														<input type="text" name="username" class="form-control" placeholder="Username*" required="">
													</div>
													<div class="form-group tg-inputwithicon">
														<input type="password" name="password" class="form-control" placeholder="Password*" required="">
													</div>
																										
													<div class="form-group">
														<div class="tg-checkbox">
															
															<b>Don't have account ?
																<a href="<?=base_url();?>home/join">Sign Up</a></b>

														</div>
													</div>

													<div class="form-group">
																<?php if ($this->session->flashdata('message')) { ?>
														<div class="alert alert-danger fade in">
															<a href="#" class="close" data-dismiss="alert">&times;</a>
															   <center>
															   	<?=$this->session->flashdata('message'); ?> </center>
														</div>
													<?php } ?>
													</div>
													<button class="tg-btn" type="submit">Login</button>
												</fieldset>
											</form>
											<br>

									
										</div>
										
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
	<?php $this->load->view('footerr');?>
	<script type="text/javascript">
		$(".alert").delay(5000).fadeOut(200, function () {
        $(this).alert('close');
    });
	</script>
