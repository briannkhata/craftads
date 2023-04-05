					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
									<form action="<?=base_url();?>referee/save" method="post" class="horizontal-form">
											<div class="form-body">

												<div class="row">
													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Member</label>
													<select class="form-control" name="user_id" required="">
														<option selected="" disabled="">Option</option>
										<?php foreach ($this->M_user->get_members() as $row) {?>
																<option <?php if($user_id == $row['user_id']) echo 'selected';?> value="<?=$row['user_id'];?>">
																		<?=$row['name'];?></option>
																<?php }?>
																
															</select>
														</div>
													</div>

													
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Referee</label>
															<textarea class="form-control summernote_1" name="referee">
																<?php if (!empty($referee)){echo $referee;}?>
															</textarea>
																</div>
													</div>

												
												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												<a href="<?=base_url();?>referee" class="btn default green-stripe"> Back</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
