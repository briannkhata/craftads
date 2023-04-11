<?php $this->load->view('header');?>
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS -->
<?php $category_id = $this->M_user->get_category_id($this->session->userdata('user_id'));?>
<?php $trial = $this->M_user->get_trial($this->session->userdata('user_id'));?>
<?php $trial_end_date = $this->M_user->get_trial_end_date($this->session->userdata('user_id'));?>
<?php $confirmed = $this->M_user->get_confirmed($this->session->userdata('user_id'));?>
<?php $rating = $this->M_user->get_rating($this->session->userdata('user_id'));?>
<?php $deleted = $this->M_user->get_deleted($this->session->userdata('user_id'));?>
<div class="alerto alert-info fade in" style="padding: 1%;">
    <h3>Welcome, <?=$this->session->userdata('name');?>!</h3>
</div>
<br>
<div class="alerto alert-success fade in" style="padding: 0.4%;">
    <h3 style="font-weight:bold;">Your category is , <?=$this->M_category->get_category($category_id);?></h3>
</div>
<p>

    <?php if ($trial == 1) { ?>
<div class="alerto alert-danger fade in" style="padding: 1%;">
    <h1>
        <b>You are in Trial Period Up to <?=date('d F Y',strtotime($trial_end_date));?> </b>
    </h1>

</div>
<?php } ?>

</p>

<p>

    <?php if ($confirmed == 0) { ?>
<div class="alerto alert-danger fade in" style="padding: 1%;">
    <h1>
        <b>Your Account is not confirmed YET!.. PLEASE DO SO TO BE TRUSTED BY CLIENTS </b>
    </h1>

</div>
<?php } ?>

</p>

<p>

    <?php if ($rating == 0) { ?>
<div class="alerto alert-danger fade in" style="padding: 1%;">
    <h1>
        <b>Yo have 0 Rating !.. PLEASE GET RATING TO BE EASILY TRUSTED WITH WORK BY CLIENTS </b>
    </h1>

</div>
<?php } ?>

</p>

<br>

<div class="row">

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat grey">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?=count($this->M_user->get_members_by_category($this->session->userdata('user_id')));?>
                </div>
                <div class="desc">
                    Members In the same Category
                </div>
            </div>
            <!-- <a class="more" href="<?=base_url();?>user/views">
		                View more <i class="m-icon-swapright m-icon-white"></i>
		            </a> -->
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-filter"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?=count($this->M_skill->get_skill_by_user($this->session->userdata('user_id')));?>
                </div>
                <div class="desc">
                    My Services/Skills
                </div>
            </div>
            <!-- <a class="more" href="<?=base_url();?>Skill">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a> -->
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-photo"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?=count($this->M_image->get_user_images($this->session->userdata('user_id')));?>
                </div>
                <div class="desc">
                    Images
                </div>
            </div>
            <!-- <a class="more" href="<?=base_url();?>Image">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a> -->
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat grey">
            <div class="visual">
                <i class="fa fa-users"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?=count($this->M_referee->get_user_referees($this->session->userdata('user_id')));?>
                </div>
                <div class="desc">
                    Referees
                </div>
            </div>
            <!-- <a class="more" href="<?=base_url();?>Image">
                View more <i class="m-icon-swapright m-icon-white"></i>
            </a> -->
        </div>
    </div>


    <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-stars"></i>
            </div>
            <div class="details">
                <div class="number">
                    <?=$this->M_user->get_rating($this->session->userdata('user_id'));?>
                </div>
                <div class="desc">
                    My Rating
                </div>
            </div>
            <a class="more" href="<?=base_url();?>User/buy_stars">
                <b>Get Rating to be Easily Trusted </b> <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>


<!--
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
				-->


</div>
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php $this->load->view('footer');?>