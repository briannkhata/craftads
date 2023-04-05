					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>testimony/save" method="post" class="horizontal-form">
											<div class="form-body">

												<div class="row">
													
													<input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Testimony</label>
															<textarea class="form-control" name="testimony">
																<?php if (!empty($testimony)){echo $testimony;}?>
															</textarea>
																</div>
													</div>

												
												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												<a href="<?=base_url();?>testimony" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
