					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> 
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/activate" method="post" class="horizontal-form" enctype="multipart/form-data">
											<div class="form-body">

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Payment Code</label>
															<input type="text" name="payment_code" class="form-control" >
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Payment Mode</label>
															<input type="text" name="payment_mode" class="form-control" >
														</div>
													</div>
													<input type="hidden" name="user_id" value="<?=$user_id;?>">

																	
												</div>
												
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
