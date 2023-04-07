<footer class="footer footer-two">

    <!-- Footer Top -->

    <!-- /Footer Top -->

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="copyright-text">
                            <p class="mb-0">&copy; 2022 <a href="<?=base_url();?>">Craft Ads</a>. All
                                rights
                                reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li>
                                    <a href="<?=base_url();?>Home/terms">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="<?=base_url();?>Home/privacy">Privacy</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
<!-- /Footer -->

</div>



<!-- jQuery -->
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

<!-- Aos -->
<script src="<?=base_url();?>front/plugins/aos/aos.js"></script>

<!-- Custom JS -->
<script src="<?=base_url();?>front/js/script.js"></script>

<script>
$(document).ready(function() {
    $('#category').on('keydown', function() {
        var category = $(this).val();
        $.ajax({
            url: '<?=base_url();?>Home/getCAT',
            data: {
                category: category
            },
            success: function(data) {
                var suggestions = JSON.parse(data);
                console.log(suggestions);
            }
        });
    });

    setTimeout(function() {
        $(".alert ").fadeOut();
    }, 5000);
});


$(function() {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $("#category").autocomplete({
        source: availableTags
    });
});

function save_enquiry() {
    try {
        if (document.getElementById("email").value == '' ||
            document.getElementById("phone").value == '' ||
            document.getElementById("name").value == '' ||
            document.getElementById("enquiry").value == '') {
            alert('Fill all fields');
        } else {

            $.post("<?=base_url();?>home/save_enquiry", {
                    name: document.getElementById("name").value,
                    enquiry: document.getElementById("enquiry").value,
                    phone: document.getElementById("phone").value,
                    email: document.getElementById("email").value
                },
                function(data, status) {
                    alert('Thank you for contacting us..We will get back to you ASAP...');
                    location.reload();

                });
        }
    } catch (err) {
        alert(err);
    }
}

$.getJSON("https://ipapi.co/json/", function(data) {
    var country = data.country_name;
    var city = data.city;
    var country_code = data.country_code;
    var country_calling_code = data.country_calling_code;
    var region = data.region;
    var region_code = data.region_code;
    var karense = data.currency;


    $("#country").val(country);
    $("#city").val(city);
    $("#country_code").val(country_code);
    $("#country_calling_code").val(country_calling_code);
    $("#region").val(region);
    $("#region_code").val(region_code);
    $(".karense").text(karense);
    $(".country_code").val(country_calling_code);
});

function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}
</script>


</body>

</html>