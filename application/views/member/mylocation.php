<?php $this->load->view('header');?>
<div class="portlet box grey-cascade">
    <div class="portlet-title">
        <div class="caption">
            <?=$page_title;?> |
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php foreach ($this->M_user->get_user_by_id($user_id) as $key) { ?>

        <form action="<?=base_url();?>User/update_location" method="post">
            <br>

            <div class="form-body">



                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <input type="text" class="form-control" name="country" value="<?=$key['country'];?>">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">City / Town</label>
                            <input type="text" class="form-control" name="city" value="<?=$key['city'];?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Exact Location</label>
                            <input type="text" class="form-control" name="exact_location"
                                value="<?=$key['exact_location'];?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Region</label>
                            <input type="text" class="form-control" name="region" value="<?=$key['region'];?>">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <textarea class="form-control" name="address">
								<?=$key['address'];?>
							</textarea>
                        </div>
                    </div>
                </div>




                <hr>
                CURRENT LOCATION
                <hr>
                <br>

                <div class="form-body">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <input type="text" class="form-control" name="country" id="country" value="">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">City / Town</label>
                                <input type="text" class="form-control" name="city" id="city" value="">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Region</label>
                                <input type="text" class="form-control" name="region" id="region" value="">
                            </div>
                        </div>
                    </div>





                </div>


                <div class="form-actions left">
                    <button type="submit" class="btn default blue-stripe"> Update</button>
                </div>
        </form>


        <?php } ?>
        <!-- END FORM-->
    </div>
    <?php $this->load->view('footer');?>