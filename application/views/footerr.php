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
    $('#category').on('input', function() {
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
</script>

</body>

</html>