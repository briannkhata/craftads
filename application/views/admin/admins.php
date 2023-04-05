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
									<center>
											<a href="<?=base_url();?>user/read2" class="btn default green-stripe">
											Add New <i class="fa fa-plus"></i>
											</a>
										</center>
								</div>
							</div>
							<hr>
							<table class="table table-striped">
							<thead>
							<tr>
								<th>Name</th>
								<th>Contacts</th>
								<th>Username</th>
								<th>Address</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_admins() as $row):?>
							<tr>
								<td><?=$row['name'];?><br>
								members :	<?=count($this->M_user->get_user_members($row['user_id']));?></td>
								<td><?=$row['email'];?><br>
								    <?=$row['phone'];?></td>
								<td><?=$row['username'];?><br>
								    <?=$row['role'];?></td>
								<td><?=$row['address'];?></td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>user/read2/<?=$row['user_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>user/delete2/<?=$row['user_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a>

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
