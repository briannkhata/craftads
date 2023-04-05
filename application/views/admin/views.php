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
								<th>Member</th>
								<th>Date</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_views() as $row):?>
							<tr>
								<td><?=$this->M_user->get_user($row['user_id']);?></td>
								<td><?=date('d F Y h:m:s',strtotime($row['date']));?></td>

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
