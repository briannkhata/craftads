<?php include 'headerr.php';?>

<!-- /Header -->

<style>
.input-group .country_code {
    width: 14%;
    border-radius: .25rem 0 0 .25rem;
    background-color: #f7f7f7;
    padding-left: 10px;
    text-align: center;
}

.input-group .form-control {
    border-radius: 0 .25rem .25rem 0;
    padding-left: 15px;
}
</style>

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
                                <div class="form-group"><label>Phone <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="country_code" name="country_code" readonly>
                                        <input type=" tel" class="form-control" name="phone" id="phone" required
                                            pattern="[1-9][0-9]*">
                                    </div>
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
<script>
var phoneNumberInput = $('#phone');;
phoneNumberInput.on('keyup', function() {
    var phoneNumber = phoneNumberInput.val();
    if (phoneNumber.charAt(0) === '0') {
        phoneNumber = phoneNumber.substring(1);
    }
    phoneNumberInput.val(phoneNumber);
});

phoneNumberInput.on('keyup', function() {
    var inputValue = phoneNumberInput.val();
    if (inputValue.length > 9) {
        alert('In valid phone Number - It should be not more than 9 characters');
        inputElement.prop('readonly', true);
        return;
    } else {
        inputElement.prop('readonly', false);
    }

});
</script>