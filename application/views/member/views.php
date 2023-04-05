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
							
							<table class="table">
							<thead>
							<tr>
								<th>Date</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_user_views($this->session->userdata('user_id')) as $row):?>
							<tr>
								<td><?=date('d F Y h:i:s',strtotime($row['date']));?>
								<br><?=$row['ip'];?></td>
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
