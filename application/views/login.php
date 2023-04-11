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
    <div class="container" style="height:   auto;">
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
                                        <input type="text" class="country_code" name="country_code"
                                            value="<?=$this->M_location->get_current_country_calling_code();?>"
                                            readonly>
                                        <input type=" tel" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group"><label>Password <span class="text-danger">*</span></label>
                                    <div class="input-group"><input class="form-control" type="password" name="password"
                                            id="password" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><input type="checkbox"
                                                    onclick="togglePasswordVisibility()"
                                                    id="show-password-checkbox"><label for="show-password-checkbox"
                                                    class="show-password-label">Show</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if ($this->session->flashdata('message')) { ?>
                    <div class=" alert alert-danger" role="alert">
                        <a href="#" class="close" data-dismiss="alert"></a>
                        <center> <?=$this->session->flashdata('message'); ?> </center>
                    </div>
                    <?php } ?>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn sabu" type="submit" id="sabu">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>﻿


<script src="<?=base_url();?>front/js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?=base_url();?>front/js/popper.min.js"></script>
<script src="<?=base_url();?>front/plugins/bootstrap/js/bootstrap.min.js">
</script>

<script src="<?=base_url();?>front/js/popper.min.js"></script>
<script src="<?=base_url();?>front/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Sticky Sidebar JS -->
<script src="<?=base_url();?>front/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?=base_url();?>front/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

<!-- Datepicker Core JS -->
<script src="<?=base_url();?>front/js/moment.min.js"></script>
<script src="<?=base_url();?>front/js/bootstrap-datetimepicker.min.js"></script>

<!-- Owl JS -->
<script src="<?=base_url();?>front/plugins/owlcarousel/owl.carousel.min.js">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- Aos -->
<script src="<?=base_url();?>front/plugins/aos/aos.js"></script>

<!-- Custom JS -->
<script src="<?=base_url();?>front/js/script.js"></script>

<script>
// $.getJSON("https://ipapi.co/json/", function(data) {
//     var country = data.country_name;
//     var city = data.city;
//     var country_code = data.country_code;
//     var country_calling_code = data.country_calling_code;
//     var region = data.region;
//     var region_code = data.region_code;
//     var karense = data.currency;

//     $("#country").val(country);
//     $("#city").val(city);
//     $("#country_code").val(country_code);
//     $("#country_calling_code").val(country_calling_code);
//     $("#region").val(region);
//     $("#region_code").val(region_code);
//     $(".karense").text(karense);
//     $(".country_code").val(country_calling_code);
// });

function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}


var phoneNumberInput = $('#phone');
var inputElement = $('.sabu');


phoneNumberInput.on('keyup', function() {
    var phoneNumber = phoneNumberInput.val();
    if (phoneNumber.charAt(0) === '0') {
        phoneNumber = phoneNumber.substring(1);
    }
    phoneNumberInput.val(phoneNumber);
});


if (phoneNumberInput.val().length > 9) {
    alert('Invalid phone number - It should not be more than 9 characters')
    inputElement.prop('readonly', true);
} else {
    inputElement.prop('readonly', false);
}
</script>
</body>

</html>