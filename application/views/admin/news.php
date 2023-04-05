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
												<a href="<?=base_url();?>news/read" class="btn default green-stripe">
											Create News
											</a>

										</center>
									</div>
									
								</div>
							</div>
							<hr>
							<table class="table table-striped">
							<thead>
							<tr>
								<th>News Body</th>
								<th>Image</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_news->get_news() as $row):?>
							<tr>
								<td><?=$this->M_user->get_user($row['added_by']);?> | <?=date('d F-Y h:i',strtotime($row['date_added']));?><br>
									<?=$row['title'];?><br>
									<?=$row['body'];?></td>
								<td><img src="<?=base_url();?>uploads/news/<?=$row['image'];?>"></td>
								<td></td>
								<td>
									<div class="btn-group">
										<a href="<?=base_url();?>news/read/<?=$row['news_id'];?>" class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>
										
										<a href="<?=base_url();?>news/delete/<?=$row['news_id'];?>" class="btn btn-sm default red-stripe"><i class="fa fa-times-circle"></i></a>

								
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
