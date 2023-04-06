<?php include 'headerr.php';?>

<!-- /Header -->

<div class="content">
    <div class="container" style="height:650px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center">
                    <h2>Login</h2>
                </div>
                <form action="<?=base_url();?>Login/signin" method="post">
                    <div class="service-fields mb-3">
                        <h3 class="heading-2">Enter your details to Login</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="password" id="password"
                                        placeholder="Password" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($this->session->flashdata('message')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <a href="#" class="close" data-dismiss="alert"></a>
                        <center> <?=$this->session->flashdata('message'); ?> </center>
                    </div>
                    <?php } ?>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>﻿

<!-- Footer -->
<?php include 'footerr.php';?>