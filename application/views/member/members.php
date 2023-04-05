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
												<a href="<?=base_url();?>user/read" class="btn default green-stripe">
											Create Member
											</a>

										</center>
									</div>
									
								</div>
							</div>
							<hr>
							<table class="table table-striped">
							<thead>
							<tr>
								<th>Name</th>
								<th>Dates</th>
								<th>Contacts</th>
								<th>Address</th>
								<th>Status</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$count = 1;
							foreach ($this->M_user->get_members() as $row):?>
							<tr>
								<td>
									<?=strtoupper($row['name']);?> - <?=$row['gender'];?><br>
									<?=$this->M_category->get_category($row['category_id']);?>
								</td>
								<td><?=date('d F - Y',strtotime($row['date_joined']));?> <br>
								    Expiry Date : <?=date('d F - Y',strtotime($row['expiry_date']));?></td>
								<td><?=$row['email'];?> | <?=$row['alt_email'];?><br>
									<?=$row['phone'];?> | <?=$row['alt_phone'];?></td>
								<td><?=$this->M_location->get_location($row['location_id']);?> | 
									<?=$this->M_district->get_district($row['district_id']);?><br>
									<?=$row['address'];?></td>
								<td>
									<?php
									if($row['deleted'] == 0){?>
										<span class="label label-success">account active</span>

										<?php if($row['featured'] == 0){?>
											<a href="<?=base_url();?>user/feature/<?=$row['user_id'];?>">feature </a>
										<?php } else {?>
										<a href="<?=base_url();?>user/unfeature/<?=$row['user_id'];?>">unfeature </a>
										<?php } ?>

									<?php } else {?>
										<span class="label label-danger" title="">account inactive</span><br>
										<a href="<?=base_url();?>user/activate_user/<?=$row['user_id'];?>">Activate Now</a>
										<?php }?>
								</td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>user/read/<?=$row['user_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>user/delete/<?=$row['user_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a><br>

										<a href="<?=base_url();?>user/view/<?=$row['user_id'];?>" class="btn btn-sm default blue-stripe"> View Details</a>
								
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
