					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/save2" method="post" class="horizontal-form" enctype="multipart/form-data">
											<br>
											<div class="form-body">
    											

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Name</label>
															<input type="text" name="name" class="form-control" value="<?php if (!empty($name)){echo $name;}?>" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Username</label>
															<input type="text" name="username" class="form-control" value="<?php if (!empty($username)){echo $username;}?>" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Password</label>
															<input type="password" name="password" class="form-control" >
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
															<label class="control-label">Email</label>
															<input type="email" name="email" class="form-control" value="<?php if (!empty($email)){echo $email;}?>" required>
														</div>
													</div>

													</div>
													<div class="row">
														<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Role</label>
															<select name="role" class="form-control">
															<option selected="" disabled="">--Select Option--</option>
												<option <?php if ($role=='agent') echo 'selected';?> value="agent">
												Agent</option>


												<option <?php if ($role=='admin') echo 'selected';?> value="admin">
												Admin</option>
												
															</select>
														
														</div>
													</div>												
													</div>
													<div class="row">
														<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Address</label>
															<input type="tel" name="address" class="form-control" value="<?php if (!empty($address)){echo $address;}?>" required>
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
												<a href="<?=base_url();?>user/admins" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
