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
									<div class="col-md-12">
											<center>
												<a href="<?=base_url();?>testimony/read" class="btn default green-stripe">
											Create Testimony
											</a>

										</center>
									</div>
									
								</div>
							</div>
							<table class="table">
						
							<tbody>
							<?php foreach ($this->M_testimony->get_user_testimonies($this->session->userdata('user_id')) as $row):?>
							<tr>
								<td><?=$row['testimony'];?></td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>testimony/read/<?=$row['testimony_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>testimony/delete/<?=$row['testimony_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a>

								
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
