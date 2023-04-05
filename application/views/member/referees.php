<?php $this->load->view('header');?>
		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<?=$page_title;?>
							</div>

						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<?php if (count($this->M_referee->get_user_referees($this->session->userdata('user_id'))) > 3){} else{?>

									<div class="col-md-12">
											<center>
												<a href="<?=base_url();?>referee/read" class="btn default green-stripe">
											Create Referee
											</a>
										</center>
									</div>
								<?php }?>
									
								</div>
							</div>
							<table class="table">
						
							<tbody>
							<?php foreach ($this->M_referee->get_user_referees($this->session->userdata('user_id')) as $row):?>
							<tr>
								<td><?=$row['referee'];?></td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>referee/read/<?=$row['referee_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>referee/delete/<?=$row['referee_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a>

								
									</div>
								</td>
							</tr>
							<?php endforeach;?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<?php $this->load->view('footer');?>
