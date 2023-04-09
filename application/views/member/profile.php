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

					        <form action="<?=base_url();?>User/update_profile" method="post">
					            <br>

					            <div class="form-body">

					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Name</label>
					                            <input type="text" name="name" class="form-control" value="<?=$key['name'];?>"
					                                required>
					                        </div>
					                    </div>
					                </div>
					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Category</label>
					                            <select class="form-control" name="category_id">
					                                <option selected="" disabled="">Option</option>
					                                <?php foreach ($this->M_category->get_categories() as $row) {?>
					                                <option <?php if($key['category_id'] == $row['category_id']) echo 'selected';?>
					                                    value="<?=$row['category_id'];?>">
					                                    <?=$row['category'];?>
					                                </option>
					                                <?php }?>

					                            </select>

					                        </div>
					                    </div>


					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Phone</label>
					                            <input type="tel" name="phone" class="form-control" value="<?=$key['phone'];?>">
					                        </div>
					                    </div>
					                </div>


					                <div class="row">

					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Email</label>
					                            <input type="email" name="email" class="form-control" value="<?=$key['email'];?>"
					                                required>
					                        </div>
					                    </div>

					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Start Price</label>
					                            <input type="text" name="start_price" class="form-control"
					                                value="<?=$key['start_price'];?>" required>
					                        </div>
					                    </div>

					                </div>

					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Exact Location</label>
					                            <input type="text" class="form-control" name="exact_location"
					                                value="<?=$key['exact_location'];?>">

					                            <input type="hidden" name="country" id="country">
					                            <input type="hidden" name="city" id="city">
					                            <input type="hidden" name="country_calling_code" id="country_calling_code">
					                            <input type="hidden" name="country_code" id="country_code">
					                            <input type="hidden" name="region" id="region">
					                            <input type="hidden" name="region_code" id="region_code">
					                        </div>
					                    </div>
					                </div>



					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Address</label>
					                            <textarea class="form-control" name="address">
																<?=strip_tags($key['address']);?>
															</textarea>
					                        </div>
					                    </div>

					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Tagline</label>
					                            <input type="text" class="form-control" name="tagline" value="<?=$key['tagline'];?>">
					                        </div>
					                    </div>
					                </div>

					                <div class=" row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Twitter</label>
					                            <input type="text" name="twitter" class="form-control" value="<?=$key['twitter'];?>">

					                        </div>
					                    </div>

					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Instagram</label>
					                            <input type="text" name="instagram" class="form-control"
					                                value="<?=$key['instagram'];?>">

					                        </div>
					                    </div>

					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Facebook</label>
					                            <input type="text" name="facebook" class="form-control" value="<?=$key['facebook'];?>">

					                        </div>
					                    </div>

					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Linked In</label>
					                            <input type="text" name="linkedin" class="form-control" value="<?=$key['linkedin'];?>">

					                        </div>
					                    </div>
					                </div>

					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Purpose</label>
					                            <textarea class="form-control" name="purpose" rows="10"
					                                placeholder="e.g Looking for any Job">
																<?=strip_tags($key['purpose']);?>
															</textarea>
					                        </div>
					                    </div>
					                </div>


					                <div class="row">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Service Details</label>
					                            <textarea class="form-control" name="details" rows="10">
																<?=strip_tags($key['details']);?>
															</textarea>
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