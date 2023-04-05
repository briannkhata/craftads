					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> 
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>member/save_images" method="post" class="horizontal-form" enctype="multipart/form-data">
											<div class="form-body">

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Select Images</label>
															<input type="file" name="image[]" multiple="" class="form-control" value="<?php if (!empty($image)){echo $image;}?>" required>
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
												<a href="<?=base_url();?>member/view/<?=$user_id;?>" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
