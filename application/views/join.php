<?php include 'headerr.php';?>

<!-- /Header -->

<div class="content">
    <div class="container" style="height:650px;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-header text-center">
                    <h2>Join the Network</h2>
                </div>
                <form>
                    <div class="service-fields mb-3">
                        <h3 class="heading-2">Enter your Details</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-fields mb-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select class="form-control form-select">
                                        <?php foreach($this->M_category->get_categories() as $cat){?>
                                        <option><?=$cat['category'];?></option>
                                        <?php }?>

                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit">Join</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>﻿

<!-- Footer -->
<?php include 'footerr.php';?>