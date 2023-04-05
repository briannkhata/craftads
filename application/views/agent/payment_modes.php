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
								<th>Payment Details</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($this->M_payment_mode->get_payment_modes() as $row):?>
							<tr>
								<td><?=$row['payment_mode'];?><br><?=$row['details'];?></td>
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
