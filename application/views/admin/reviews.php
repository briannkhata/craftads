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
								<th>Reviewer</th>
								<th>Review</th>
								<th>Review Date</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_reviews() as $row):?>
							<tr>
								<td><?=$this->M_user->get_user($row['user_id']);?></td>
								<td><?=$row['name'];?></td>
								<td><?=$row['review'];?></td>
								<td><?=date('d F Y',strtotime($row['review_date']));?></td>

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
