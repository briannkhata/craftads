					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> 
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/change_password2" method="post" class="horizontal-form" enctype="multipart/form-data">
											<div class="form-body">

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Username</label>
															<input type="text" name="" class="form-control" value="<?=$this->M_user->get_username($user_id);?>" readonly>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">New Password</label>
															<input type="password" name="password" class="form-control">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Re -Enter Password</label>
															<input type="password" name="repassword" class="form-control">
														</div>
													</div>
														
												</div>
												
											</div>
											<div class="form-actions left">
												<button type="submit" class="btn default blue-stripe"> Save</button>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
