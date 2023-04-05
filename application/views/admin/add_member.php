					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/save" method="post" class="horizontal-form" enctype="multipart/form-data">
											<br>
											<div class="form-body">
    											<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Select Photo</label>
															<input type="file" name="photo" class="form-control" value="<?php if (!empty($photo)){echo $photo;}?>" required>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Name</label>
															<input type="text" name="name" class="form-control" value="<?php if (!empty($name)){echo $name;}?>" required>
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label class="control-label">Profession</label>
															<input type="text" name="profession" class="form-control" value="<?php if (!empty($profession)){echo $profession;}?>" required>
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label class="control-label">Username</label>
															<input type="text" name="username" class="form-control" value="<?php if (!empty($username)){echo $username;}?>" required>
														</div>
													</div>
												</div>

												
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Gender</label>
															<select name="gender" class="form-control">
															<option selected="" disabled="">--Select Option--</option>
												<option <?php if ($gender=='female') echo 'selected';?> value="female">
												Female</option>


												<option <?php if ($gender=='male') echo 'selected';?> value="male">
												Male</option>
												<option <?php if ($gender=='company') echo 'selected';?> value="company"> Company</option>
															</select>
														
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Phone</label>
															<input type="tel" name="phone" class="form-control" value="<?php if (!empty($phone)){echo $phone;}?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Alt Phone</label>
															<input type="tel" name="alt_phone" class="form-control" value="<?php if (!empty($alt_phone)){echo $alt_phone;}?>" start with country code ie 265 required>
														</div>
													</div>


													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Email</label>
															<input type="email" name="email" class="form-control" value="<?php if (!empty($email)){echo $email;}?>" start with country code ie 265 required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Alt Email</label>
															<input type="email" name="alt_email" class="form-control" value="<?php if (!empty($alt_email)){echo $alt_email;}?>" required>
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Date Joined</label>
															<input type="date" name="date_joined" class="form-control" value="<?php if (!empty($date_joined)){echo $date_joined;}?>" required>
														</div>
													</div>
										
													</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Country</label>
															<select class="form-control" name="country_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_country->get_countries() as $row) {?>
																	<option <?php if($country_id == $row['country_id']) echo 'selected';?> value="<?=$row['country_id'];?>">
																		<?=$row['country'];?>
																	</option>
																<?php }?>
																
															</select>

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
																	<option <?php if($category_id == $row['category_id']) echo 'selected';?> value="<?=$row['category_id'];?>">
																		<?=$row['category'];?>
																	</option>
																<?php }?>
																
															</select>

														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">District / Provinces</label>
															<select class="form-control" name="district_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_district->get_districts() as $row) {?>
																	<option <?php if($district_id == $row['district_id']) echo 'selected';?> value="<?=$row['district_id'];?>">
																		<?=$row['district'];?>
																	</option>
																<?php }?>
																
															</select>

														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Location / Township</label>
															<select class="form-control" name="location_id">
																<option selected="" disabled="">Option</option>
																<?php foreach ($this->M_location->get_locations() as $row) {?>
																	<option <?php if($location_id == $row['location_id']) echo 'selected';?> value="<?=$row['location_id'];?>">
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
																<?php if (!empty($address)){echo $address;}?>
															</textarea>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Tagline</label>
															<textarea class="form-control" name="tagline">
																<?php if (!empty($tagline)){echo $tagline;}?>
															</textarea>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Twitter</label>
															<input type="text" name="twitter" class="form-control" value="<?php if (!empty($twitter)){echo $twitter;}?>">
															
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Instagram</label>
															<input type="text" name="instagram" class="form-control" value="<?php if (!empty($instagram)){echo $instagram;}?>">
															
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Facebook</label>
															<input type="text" name="facebook" class="form-control" value="<?php if (!empty($facebook)){echo $facebook;}?>">
															
														</div>
													</div>
												</div>

												<div class="row">
												    <div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Start Price ($)</label>
															<input type="text" name="start_price" class="form-control" value="<?php if (!empty($start_price)){echo $start_price;}?>" required>
														</div>
													</div>
												</div>

												


												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Details</label>
															<textarea class="form-control" name="details" rows="6">
																<?php if (!empty($details)){echo $details;}?>
															</textarea>
														</div>
													</div>
												</div>
<input type="hidden" name="added_by" value="<?=$this->session->userdata('user_id');?>">
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												<a href="<?=base_url();?>user/members" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
