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
							<tbody>
							<?php foreach ($this->M_user->get_user_by_id($this->session->userdata('user_id')) as $row):?>
							<tr>
								<td><?=number_format($row['amount'],2);?> | <?=$row['payment_mode'];?> <br>
								<td><?=$row['payment_code'];?></td>
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
