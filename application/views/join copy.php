    <?php $this->load->view('headerr');?>

		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout" >
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
								<style type="text/css">
									select{
										height:50px; 
									}
								</style>
								
								
								<div class="tg-title">
									<h2>Create Account</h2>
								</div>
								<p style="margin-left:;">
										After creating your Account,make sure you login into your Account and <br>
										update your profile
									</p>
								<div class="tg-haslayout">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
											<form class="tg-formtheme tg-formregister" action="<?=base_url();?>home/register" method="post" enctype="multipart/form-data">
												<fieldset>
													<div class="form-group tg-inputwithicon">
														<label>Name *</label>
														<input type="text" name="name" class="form-control" required="">
													</div>
													<div class="form-group tg-inputwithicon">
														<label>Logo / Picture *</label>
														<input type="file" name="photo" class="form-control" placeholder="Photo*" required="">
													</div>
												
													<div class="form-group tg-inputwithicon">
														<label>Username *</label>
														<input type="text" name="username" class="form-control" required="">
													</div>
													<div class="form-group tg-inputwithicon">
														<label>Password *</label>
														<input type="password" name="password" class="form-control" required="">
													</div>
													<div class="form-group tg-inputwithicon">
														<label>Retype password *</label>
														<input type="password" name="cpassword" class="form-control" required="">
													</div>

													<div class="form-group tg-inputwithicon">
														<label>Category *</label>
													<select name="category_id" class="form-control">
														<option selected="" disabled="">Category</option>
												<?php foreach ($this->M_category->get_categories() as $row) {?>
														<option value="<?=$row['category_id'];?>"><?=$row['category'];?>
														</option>
													<?php }?>
												</select>
													</div>

													<div class="form-group tg-inputwithicon">
														<label>Country *</label>
													<select name="country_id" class="form-control">
														<option selected="" disabled="">Country</option>
												<?php foreach ($this->db->get('countries')->result_array() as $row) {?>
														<option value="<?=$row['country_id'];?>"><?=$row['country'];?>
														</option>
													<?php }?>
												</select>
													</div>

													<div class="form-group tg-inputwithicon">
														<label>District *</label>
													<select name="district_id" class="form-control">
														<option selected="" disabled="">District</option>
												<?php foreach ($this->M_district->get_districts() as $row) {?>
														<option value="<?=$row['district_id'];?>"><?=$row['district'];?>
														</option>
													<?php }?>
												</select>
													</div>
												
												<div class="form-group tg-inputwithicon">
														<label>Location *</label>
													<select name="location_id" class="form-control">
														<option selected="" disabled="">Location/Township</option>
												<?php foreach ($this->M_location->get_locations() as $row) {?>
														<option value="<?=$row['location_id'];?>"><?=$row['location'];?>
														</option>
													<?php }?>
												</select>
													</div>


												<div class="form-group tg-inputwithicon">
														<label>Address *</label>
													<textarea name="address" class="form-control">
													</textarea>
												</select>
													</div>




													
													<div class="form-group">
														<div class="tg-checkbox">
														<label for="">By registering, you accept our <a href="javascript:void(0);">Terms &amp; Conditions</a></label><br>
															
														</div>
													</div>

													<div class="form-group">
																<?php if ($this->session->flashdata('message')) { ?>
														<div class="alert alert-success fade in">
															<a href="#" class="close" data-dismiss="alert">&times;</a>
															   <center>
															   	<?=$this->session->flashdata('message'); ?> </center>
														</div>
													<?php } ?>

													<?php if ($this->session->flashdata('message2')) { ?>
														<div class="alert alert-danger fade in">
															<a href="#" class="close" data-dismiss="alert">&times;</a>
															   <center>
															   	<?=$this->session->flashdata('message2'); ?> </center>
														</div>
													<?php } ?>
													</div>
													<button class="tg-btn" type="submit">Register</button>
												</fieldset>
											</form>
										</div>
										
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

