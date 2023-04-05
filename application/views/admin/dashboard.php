		<?php $this->load->view('header');?>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->

			<div class="row">
			
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-money"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_category->get_categories());?>
							</div>
							<div class="desc">
								 Categories
							</div>
						</div>
						<a class="more" href="<?=base_url();?>Category">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
						
					</div>
				</div>
			
				<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-users"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_user->get_members());?>
							</div>
							<div class="desc">
								Members
							</div>
						</div>
						<a class="more" href="<?=base_url();?>user/members">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-user"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_user->get_admins());?>
							</div>
							<div class="desc">
								 Admins
							</div>
						</div>
						<a class="more" href="<?=base_url();?>user/admins">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			
			
			</div>


			<div class="row">
				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-circle"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_location->get_locations());?>
							</div>
							<div class="desc">
								Locations
							</div>
						</div>
						<a class="more" href="<?=base_url();?>location">
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
								<?=count($this->M_district->get_districts());?>
							</div>
							<div class="desc">
								 Districts
							</div>
						</div>
						<a class="more" href="<?=base_url();?>district">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat green">
						<div class="visual">
							<i class="fa fa-users"></i>
						</div>
						<div class="details">
							<div class="number">
								<?=count($this->M_user->get_agents());?>
							</div>
							<div class="desc">
								 Agents
							</div>
						</div>
						<a class="more" href="<?=base_url();?>user/agents">
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
