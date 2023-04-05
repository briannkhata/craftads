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
												<a href="<?=base_url();?>location/read" class="btn default green-stripe">
											Create Location
											</a>

										</center>
									</div>
									
								</div>
							</div>
							<hr>
							<table class="table table-striped">
							<thead>
							<tr>
								<th>Location</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_location->get_locations() as $row):?>
							<tr>
								<td><?=$row['location'];?></td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>location/read/<?=$row['location_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>location/delete/<?=$row['location_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a>

								
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
