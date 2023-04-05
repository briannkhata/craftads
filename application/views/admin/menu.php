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
					<a href="<?=base_url();?>user/admins">
					<i class="icon-user"></i>
					<span class="title">Admins / Agents</span>
					</a>
				
				</li>	
				
				<li>
					<a href="javascript:;">
					<i class="icon-users"></i>
					<span class="title">Manage Services</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?=base_url();?>category">
							- Categories </a>
						</li>
						<li>
							<a href="<?=base_url();?>country">
							- Countries</a>
						</li>
						
						<li>
							<a href="<?=base_url();?>district">
							- Districts (Provinces)</a>
						</li>
						<li>
							<a href="<?=base_url();?>location">
							- Locations (Townships)</a>
						</li>
						
						<li>
							<a href="<?=base_url();?>user/reviews">
							- Reviews</a>
						</li>

						<li>
							<a href="<?=base_url();?>user/views">
							- Views</a>
						</li>

						<li>
							<a href="<?=base_url();?>user/members">
							- Members</a>
						</li>

						<li>
							<a href="<?=base_url();?>referee">
							- Referees</a>
						</li>				
									
					
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="fa fa-comments"></i>
					<span class="title">Communication</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?=base_url();?>sms">
							- Send SMS</a>
						</li>
						<li>
							<a href="<?=base_url();?>user/email">
							- Send Email</a>
						</li>
						<li>
							<a href="<?=base_url();?>examination_paper">
							- SMS History</a>
						</li>
						<li>
							<a href="<?=base_url();?>user/emails">
							- Email History</a>
						</li>

						<li>
							<a href="<?=base_url();?>user/enquiries">
							- Enquiries</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?=base_url();?>news">
					<i class="fa fa-file"></i>
					<span class="title">News</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>payment_mode">
					<i class="fa fa-table"></i>
					<span class="title">Payment Modes</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>testimony">
					<i class="fa fa-filter"></i>
					<span class="title">Testimonies</span>
					</a>
						
				</li>
				
				<li>
					<a href="<?=base_url();?>user/settings">
					<i class="fa fa-cogs"></i>
					<span class="title">Settings</span>
					</a>
						
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>