					<?php $this->load->view('header');?>
							<div class="portlet box grey-cascade">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> |
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>news/save" method="post" class="horizontal-form" enctype="multipart/form-data">
											<div class="form-body">

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Image</label>
															<input type="file" name="image" class="form-control" value="<?php if (!empty($image)){echo $image;}?>">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Title</label>
															<input type="text" name="title" class="form-control" value="<?php if (!empty($title)){echo $title;}?>" required>
														</div>
													</div>

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Tags</label>
															<input type="text" name="tags" class="form-control" value="<?php if (!empty($tags)){echo $tags;}?>" required>
														</div>
													</div>

													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">News Body</label>
															<textarea class="form-control summernote_1" name="body" rows="30">
																<?php if (!empty($body)){echo $body;}?>
															</textarea>
														</div>
													</div>

													
												
											</div>
											<div class="form-actions left">
											       <?php if (isset($update_id)){?>
                                                     <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
                                                  <?php }?>
												<button type="submit" class="btn default blue-stripe"> Save</button>
												<a href="<?=base_url();?>news_type" class="btn default green-stripe"> Back
												</a>
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
