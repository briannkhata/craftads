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
								<th>Name</th>
								<th>Message</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Date</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_enquiries() as $row):?>
							<tr>
								<td><?=$row['name'];?></td>
								<td><?=$row['enquiry'];?></td>
								<td><?=$row['email'];?></td>
								<td><?=$row['phone'];?></td>
								<td><?=date('d F-Y h:s',strtotime($row['enquiry_date']));?></td>
							
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
