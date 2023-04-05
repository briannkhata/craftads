		<?php $this->load->view('header');?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->

			<?php $deleted = $this->M_user->get_deleted($this->session->userdata('user_id'));?>
			<div class="alerto alert-info fade in" style="padding: 1%;">
					<h3>Welcome,<?=$this->session->userdata('name');?>!</h3>
				</div>

			<p>  
		<!--
			<?php if ($deleted == 1) { ?>
				<div class="alerto alert-danger fade in" style="padding: 1%;">
					<center>
					 <h4><b>
					 Account not yet Activated ! Pay fee now to start enjoying our service ON 
					</b></h4>
					<?php foreach ($this->M_payment_mode->get_payment_modes() as $inde) {?>
						<b><?=$inde['payment_mode'];?> 
						(<?=$inde['details'];?>)</b> | 
					<?php }?>
					<br>
					SEND YOUR PAYMENT ID TO <br>
					<strong><a href="https://api.whatsapp.com/send?phone=<?=$this->db->get('settings')->row()->phone;?>" title="CLICK TO SEND whatsapp">
					<?=$this->db->get('settings')->row()->phone;?></a></strong> 
						
					</center>
				</div>
			<?php } ?>	
			-->
		</p>

		<div class="row">
							
				<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat grey">
						<div class="visual">
							<i class="fa fa-eye"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_user->get_user_views($this->session->userdata('user_id')));?>
							</div>
							<div class="desc">
								 Views
							</div>
						</div>
						<a class="more" href="<?=base_url();?>user/views">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
		</div>

			<div class="row">
							
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow">
						<div class="visual">
							<i class="fa fa-user"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_user->get_user_reviews($this->session->userdata('user_id')));?>
							</div>
							<div class="desc">
								 Reviews
							</div>
						</div>
						<a class="more" href="<?=base_url();?>user/reviews">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			
			
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-circle"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_referee->get_user_referees($this->session->userdata('user_id')));?>
							</div>
							<div class="desc">
								Referees
							</div>
						</div>
						<a class="more" href="<?=base_url();?>referee">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-users"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_testimony->get_user_testimonies($this->session->userdata('user_id')));?>
							</div>
							<div class="desc">
								 Testimonies
							</div>
						</div>
						<a class="more" href="<?=base_url();?>testimony">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>

				
			</div>

			
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('footer');?>
