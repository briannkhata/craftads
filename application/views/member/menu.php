<?php $deleted = $this->M_user->get_deleted($this->session->userdata('user_id'));?>

<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-accordion-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="#" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->

				</li>
				<li class="start active">
					<a href="<?=base_url();?>User/dashboard">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				
				</li>	
				
				<li>
					<a href="<?=base_url();?>referee">
					<i class="fa fa-users"></i>
					<span class="title">Referees</span>
					</a>
					
				</li>
				<li>
					<a href="<?=base_url();?>user/reviews">
					<i class="fa fa-file"></i>
					<span class="title">Reviews</span>
					</a>
					
				</li>

				<li>
					<a href="<?=base_url();?>user/views">
					<i class="fa fa-list"></i>
					<span class="title">Views</span>
					</a>
					
				</li>

				<li>
					<a href="<?=base_url();?>image">
					<i class="fa fa-image"></i>
					<span class="title">Images</span>
					</a>
						
				</li>

				

				<li>
					<a href="<?=base_url();?>testimony">
					<i class="fa fa-filter"></i>
					<span class="title">Testimonies</span>
					</a>
						
				</li>
				
				<li>
					<a href="<?=base_url();?>user/profile">
					<i class="fa fa-cogs"></i>
					<span class="title">Profile</span>
					</a>
						
				</li>

				
				<!--li>
					<a href="<?=base_url();?>user/payments">
					<i class="fa fa-money"></i>
					<span class="title">Payments</span>
					</a>
						
				</li>
				
				<?php if($deleted  == 1){?>
				<li style="background: red;">
					<a href="<?=base_url();?>user/activate_account">
					<i class="fa fa-key"></i>
					<span class="title"><b>Activate Account</b></span>
					</a>
						
				</li>
			<?php } else{}?>
		-->
				
			</ul>
			<!-- END SIDEBAR MENU -->
			
		</div>
	</div>