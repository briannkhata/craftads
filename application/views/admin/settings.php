					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?>
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
							<form action="<?=base_url();?>user/save_settings" method="post" class="horizontal-form" enctype="multipart/form-data">
											<?php foreach ($this->db->get('settings')->result_array() as $row):?>

											<div class="form-body">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Business Name</label>
														<input type="text" class="form-control" name="app" value="<?=$row['app'];?>">
														<input type="hidden" name="id" value="<?=$row['id'];?>">
														
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Image</label>
															<input type="file" name="image" class="form-control" value="<?php if (!empty($image)){echo $image;}?>">
														</div>
													</div>
																	
												</div>

												
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Phone</label>
															<input type="tel" class="form-control" name="phone" value="<?=$row['phone'];?>">														
														</div>
													</div>

											
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Email</label>
															<input type="email" class="form-control" name="email" value="<?=$row['email'];?>">														
														</div>
													</div>

												</div>

												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Instagram</label>
															<input type="text" class="form-control" name="instagram" value="<?=$row['instagram'];?>">														
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Twitter</label>
															<input type="text" class="form-control" name="twitter" value="<?=$row['twitter'];?>">														
														</div>
													</div>
												
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Facebook</label>
															<input type="text" class="form-control" name="facebook" value="<?=$row['facebook'];?>">														
														</div>
													</div>
												</div>
												
											
											<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Currency</label>
															<input type="text" class="form-control" name="currency" value="<?=$row['currency'];?>">														
														</div>
													</div>

													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Joining fee</label>
															<input type="text" class="form-control" name="joining_fee" value="<?=$row['joining_fee'];?>">														
														</div>
													</div>
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label">Duration (Months)</label>
															<input type="text" class="form-control" name="duration" value="<?=$row['duration'];?>">														
														</div>
													</div>

												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Address</label>
															<textarea class="form-control summernote_1" name="address">
																<?=$row['address'];?>
															</textarea>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">About</label>
															<textarea class="form-control summernote_1" name="about">
																<?=$row['about'];?>
															</textarea>
														</div>
													</div>
												</div>
												
											</div>
										<?php endforeach;?>
											<div class="form-actions left">
												<button type="submit" class="btn default blue-stripe"> Save</button>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
