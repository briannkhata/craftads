					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
							<?php foreach ($this->M_user->get_user_by_id($user_id) as $key) { ?>

										<form action="<?=base_url();?>user/update_profile" method="post">
											<br>
											
											<div class="form-body">


												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Name</label>
															<input type="text" name="name" class="form-control" value="<?=$key['name'];?>" required>
														</div>
													</div>
												</div>
													<div class="row">
														<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Category</label>
															<select class="form-control" name="category_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_category->get_categories() as $row) {?>
																	<option <?php if($key['category_id'] == $row['category_id']) echo 'selected';?> value="<?=$row['category_id'];?>">
																		<?=$row['category'];?>
																	</option>
																<?php }?>
																
															</select>

														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Profession</label>
															<input type="text" name="profession" class="form-control" value="<?=$key['profession'];?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Username</label>
															<input type="text" name="username" class="form-control" value="<?=$key['username'];?>" readonly>
														</div>
													</div>
												</div>

												
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<select name="gender" class="form-control">
															<option selected="" disabled="">--Select Option--</option>
												<option <?php if ($key['gender']=='female') echo 'selected';?> value="female">
												Female</option>


												<option <?php if ($key['gender']=='male') echo 'selected';?> value="male">
												Male</option>
												<option <?php if ($key['gender']=='company') echo 'selected';?> value="company"> Company</option>
															</select>
														
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Phone (Plus country Code)</label>
															<input type="tel" name="phone" class="form-control" 
															value="<?=$key['phone'];?>" placeholder="start with country code ie 265" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Alt Phone (Plus country Code)</label>
															<input type="tel" name="alt_phone" class="form-control" value="<?=$key['alt_phone'];?>" placeholder="start with country code" required>
														</div>
													</div>


													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Email</label>
															<input type="email" name="email" class="form-control" value="<?=$key['email'];?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Alt Email</label>
															<input type="email" name="alt_email" class="form-control" value="<?=$key['alt_email'];?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Start Price ($)</label>
															<input type="text" name="start_price" class="form-control" value="<?=$key['start_price'];?>" required>
														</div>
													</div>
										
													</div>

												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Country</label>
															<select class="form-control" name="country_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_country->get_countries() as $row) {?>
																	<option <?php if($key['country_id'] == $row['country_id']) echo 'selected';?> value="<?=$row['country_id'];?>">
																		<?=$row['country'];?>
																	</option>
																<?php }?>
																
															</select>

														</div>
													</div>
												

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Province/District</label>
															<select class="form-control" name="district_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_district->get_districts() as $row) {?>
																	<option <?php if($key['district_id'] == $row['district_id']) echo 'selected';?> value="<?=$row['district_id'];?>">
																		<?=$row['district'];?>
																	</option>
																<?php }?>
																
															</select>

														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Location (township)</label>
															<select class="form-control" name="location_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_location->get_locations() as $row) {?>
																	<option <?php if($key['location_id'] == $row['location_id']) echo 'selected';?> value="<?=$row['location_id'];?>">
																		<?=$row['location'];?>
																	</option>
																<?php }?>
																
															</select>

														</div>
													</div>
												</div>
												
												
													
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Address</label>
															<textarea class="form-control" name="address">
																<?=$key['address'];?>
															</textarea>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Tagline</label>
															<textarea class="form-control" name="tagline">
																<?=$key['tagline'];?>
															</textarea>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Twitter</label>
															<input type="text" name="twitter" class="form-control" value="<?=$key['twitter'];?>">
															
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Instagram</label>
															<input type="text" name="instagram" class="form-control" value="<?=$key['instagram'];?>">
															
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Facebook</label>
															<input type="text" name="facebook" class="form-control" value="<?=$key['facebook'];?>">
															
														</div>
													</div>
												</div>


												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">About Me</label>
															<textarea class="form-control" name="details" rows="10">
																<?=$key['details'];?>
															</textarea>
														</div>
													</div>
												</div>

											</div>
										

											<div class="form-actions left">
											     
												<button type="submit" class="btn default blue-stripe"> Update</button>
												
											</div>
										</form>
									<?php } ?>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
