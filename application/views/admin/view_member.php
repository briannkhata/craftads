<?php $this->load->view('header');?>
		
<?php //$community_id = $this->M_member->get_parent_community($member_id);?>
<?php //$currency = $this->db->get('settings')->row()->currency;?>
		<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<p>
						<a href="<?=base_url();?>user/members" class="btn default" >Back</a> 
					    <a href="<?=base_url();?>user/add_images/<?=$user_id;?>" class="btn default green-stripe" >Add Images</a>
					</p>

					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<?=$this->M_user->get_user($user_id);?> | <?=$this->M_user->get_gender($user_id);?>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<ul class="list-group">
								<?php foreach ($this->M_member->get_member_by_id($user_id) as $row) {?>

								 <li class="list-group-item d-flex justify-content-between align-items-center">
									<img src="<?=base_url();?>uploads/users/<?=$row['photo'];?>" class="img-thumbnail" style="width: 30%; height: 30%;">   
								</li>

								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['email'];?> | <?=$row['alt_email'];?>
								  </li>
								  <li class="list-group-item d-flex justify-content-between align-items-center">
								      <?=$row['phone'];?> | <?=$row['alt_phone'];?>
								  </li>

								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['address'];?><br>
								    <?=$this->M_location->get_location($row['location_id']);?> | 
								    <?=$this->M_district->get_district($row['district_id']);?>
								  </li>

								  <li class="list-group-item d-flex justify-content-between align-items-center">
									Joined on   <?=date('d F-Y',strtotime($row['date_joined']));?><br>
									<?=date('d F-Y',strtotime($row['expiry_date']));?>
								  </li>

								  <li class="list-group-item d-flex justify-content-between align-items-center">
								    <?=$row['details'];?>
								  </li>
								<?php }?>
								</ul>

									<h3>Images</h3>
									<ul class="list-group">
										<?php foreach ($this->M_image->get_user_images($user_id) as $value){?>
										 <li class="list-group-item d-flex justify-content-between align-items-center">
									    	<img src="<?=base_url();?>uploads/users/<?=$value['image'];?>">
									    	<br><br>
									    	<button class="btn btn-xs red-stripe" onclick="delete_image(<?=$value['image_id'];?>)">remove</button>
									   
									  	</li>
										<?php }?>	
									</ul>
									</div>
							
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		<?php $this->load->view('footer');?>
			<script type="text/javascript">
			function delete_image(image_id){
				$.post("<?=base_url();?>member/delete_image",
					{
					image_id: image_id
				},
				function(data,status){
					location.reload();
				});
			}
			</script>
