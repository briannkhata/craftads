					<?php $this->load->view('header');?>
							<div class="portlet box red">
									<div class="portlet-title">
										<div class="caption">
											<?=$page_title;?> 
										</div>
									
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="<?=base_url();?>user/activatee_account" method="post" class="horizontal-form" enctype="multipart/form-data">
											<div class="form-body">

												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label">Payment Code</label>
															<input type="text" name="payment_code" class="form-control" required="">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Amount</label>
															<input type="text" name="amount" class="form-control" required="">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">Payment Mode</label>
															<input type="text" name="payment_mode" class="form-control" required="">
														</div>
													</div>
																	
												<br><br><br>
												<div class="col-md-12">
													<div class="form-group">

													<table class="table">
													<tbody>
													<?php foreach ($this->M_payment_mode->get_payment_modes() as $row):?>
													<tr>
														<td><?=$row['payment_mode'];?></td>
														<td><?=$row['details'];?></td>
													</tr>
													<?php endforeach;?>
													</tbody>
													</table>
												</div>
											</div>

												
											</div>
											<div class="form-actions left">
											<button type="submit" class="btn default red-stripe"> Activate</button>
												
											</div>
										</form>
										<!-- END FORM-->
								</div>
						<?php $this->load->view('footer');?>
