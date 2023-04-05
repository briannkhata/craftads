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
								<th>Reviewer</th>
								<th>Review</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_user->get_user_reviews($this->session->userdata('user_id')) as $row):?>
							<tr>
								<td><?=$row['name'];?><br>
								<?=date('d F Y',strtotime($row['review_date']));?></td>
								<td><?=$row['review'];?></td>
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
