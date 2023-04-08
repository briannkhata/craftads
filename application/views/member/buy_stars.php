<?php $this->load->view('header');?>
<div class="portlet box red">
    <div class="portlet-title">
        <div class="caption">
            <?=$page_title;?>
        </div>

    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?=base_url();?>User/buy_stars2" method="post" class="horizontal-form"
            enctype="multipart/form-data">
            <div class="form-body">
                <?php $stars = $this->db->get('settings')->row()->stars;?>
                <?php $duration = $this->db->get('settings')->row()->duration;?>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Amount</label>
                            <input type="text" value="<?=number_format($stars,2);?>" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Payment Mode</label>
                            <select class="form-control" name="payment_mode" required>
                                <option selected disabled>Option</option>
                                <?php foreach ($this->M_payment_mode->get_payment_modes() as $row):?>
                                <option value="<?=$row['payment_mode'];?>"><?=$row['payment_mode'];?> |
                                    <?=$row['details'];?> </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class=" form-actions left">
                    <button type="submit" class="btn default red-stripe"> Activate</button>
                </div>
        </form>
        <!-- END FORM-->
    </div>
    <?php $this->load->view('footer');?>