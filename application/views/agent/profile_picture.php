					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> 
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/change_picture" method="post" class="horizontal-form" enctype="multipart/form-data">
											<div class="form-body">

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Select Image</label>
															<input type="file" name="photo" class="form-control" value="<?php if (!empty($photo)){echo $photo;}?>">
														</div>
													</div>
													<br><br>
													<div class="col-md-12">
													<img src="<?=base_url();?>uploads/users/<?=$this->M_user->get_photo($user_id);?>">
													</div>		
												</div>
												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
