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
					
							<table class="table table-striped">
							<thead>
							<tr>
								<th>Email</th>
								<th>Receiver</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_emails() as $row):?>
							<tr>
								<td><?=date('d F-Y h:s',strtotime($row['date_sent']));?><br>
									<?=$row['email_body'];?></td>
								<td><?=$this->M_user->get_user($row['user_id']);?><br>
									<?=$row['receiver'];?><br>
									Sender : <?=$row['sender'];?></td>
							
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
