					<?php $this->load->view('header');?>
					<div class="portlet box grey-cascade">
					    <div class="portlet-title">
					        <div class="caption">
					            <?=$page_title;?> |
					        </div>
					    </div>
					    <div class="portlet-body form">
					        <!-- BEGIN FORM-->
					        <form action="<?=base_url();?>referee/save" method="post" class="horizontal-form">
					            <div class="form-body">

					                <div class="row">

					                    <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Referee</label>
					                            <input type="text" class="form-control" name="referee[]"
					                                value="<?php if (!empty($referee)){echo $referee;}?>">

					                        </div>
					                    </div>
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Job Type</label>
					                            <input type="text" class="form-control" name="job[]"
					                                value="<?php if (!empty($job)){echo $job;}?>">
					                        </div>
					                    </div>
					                    <div id="newRow">
					                    </diV>


					                </div>
					                <div class="form-actions left">
					                    <?php if (isset($update_id)){?>
					                    <input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>">
					                    <?php }?>
					                    <?php if (!isset($update_id)){?>
					                    <button type="button" class="btn default green-stripe" id="newRowo">
					                        <i class="fa fa-plus-circle"></i> Add Row
					                    </button>
					                    <?php }?>
					                    <button type="submit" class="btn default blue-stripe"> Save</button>
					                </div>
					        </form>
					        <!-- END FORM-->
					    </div>
					    <?php $this->load->view('footer');?>

					    <script>
					    $('#newRowo').click(function() {
					        var html = `
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">Referee</label>
								<input type="text" class="form-control" name="referee[]">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">Job Type</label>
								<input type="text" class="form-control" name="job[]">
								</div>
							</div>
							`;
					        $('#newRow').append(html);
					    });
					    </script>