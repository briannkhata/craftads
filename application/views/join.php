<?php include 'headerr.php';?>

<!-- /Header -->

<style>
.input-group-text {
    cursor: pointer;
}

.show-password-label {
    margin-left: 5px;
}

#show-password-checkbox:checked+.show-password-label:before {
    content: "\f06e";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
}

#show-password-checkbox:not(:checked)+.show-password-label:before {
    content: "\f070";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
}

#show-password-checkbox:checked+.show-password-label {
    color: #3D9970;
}

#show-password-checkbox:not(:checked)+.show-password-label {
    color: #555;
}
</style>

<div class="content">
    <div class="container" style="height:750px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center">
                    <h2>Join the Network</h2>
                </div>
                <form action="<?=base_url();?>Home/register" method="post">
                    <div class="service-fields mb-3">
                        <h3 class="heading-2">Enter your Details</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="phone" id="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input class="form-control" type="password" name="password" id="password"
                                            required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <input type="checkbox" onclick="togglePasswordVisibility()"
                                                    id="show-password-checkbox">
                                                <label for="show-password-checkbox" class="show-password-label">Show
                                                    password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Exact Location<span class="text-danger">*</span></label>
                                    <input placeholder="e.g Chirimba" class="form-control" type="text"
                                        name="exact_location" id="exact_location" required>
                                    <input type="hidden" name="country" id="country">
                                    <input type="hidden" name="city" id="city">
                                    <input type="hidden" name="country_calling_code" id="country_calling_code">
                                    <input type="hidden" name="country_code" id="country_code">
                                    <input type="hidden" name="region" id="region">
                                    <input type="hidden" name="region_code" id="region_code">
                                </div>


                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select class="form-control form-select" name="category_id" id="category_id">
                                        <option selected disabled>Choose Category</option>
                                        <?php foreach($this->M_category->get_categories() as $cat){?>
                                        <option value="<?=$cat['category_id'];?>"><?=$cat['category'];?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class=" submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Join</button>
                    </div>
                    <br>
                    <?php if ($this->session->flashdata('message')) { ?>
                    <div class="alert alert-info" role="alert">
                        <a href="#" class="close" data-dismiss="alert"></a>
                        <center> <?=$this->session->flashdata('message'); ?> </center>
                    </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('message2')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <a href="#" class="close" data-dismiss="alert"></a>
                        <center> <?=$this->session->flashdata('message2'); ?> </center>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>﻿

<!-- Footer -->
<?php include 'footerr.php';?>