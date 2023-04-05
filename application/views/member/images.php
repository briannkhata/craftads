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
												<a href="<?=base_url();?>image/read" class="btn default green-stripe">
											Add Image
											</a>

										</center>
									</div>
									
								</div>
							</div>
							<hr>
							<table class="table table-striped">
							<thead>
							<tr>
								<th>Image</th>
								<th>Title</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_image->get_user_images($this->session->userdata('user_id')) as $row):?>
							<tr>
								<td><img class="img" src="<?=base_url();?>uploads/gallery/<?=$row['image'];?>" style="width: 100%; height: 100px;">
								</td>
								<td>
									<?=$row['title'];?><br>
								    <?=date('d F Y',strtotime($row['date_added']));?>
								    
								</td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>image/read/<?=$row['image_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>image/delete/<?=$row['image_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a>
								
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
