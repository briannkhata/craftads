<div class="page-footer">
    <div class="page-footer-inner">
        &copy; All rights reserved <?=$this->db->get('settings')->row()->app;?>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?=base_url();?>assets/global/plugins/respond.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
    type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript">
</script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->



<script src="<?=base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>

<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js">
</script>

<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js">
</script>
<script type="text/javascript"
    src="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<script src="<?=base_url();?>assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript">
</script>
<script src="<?=base_url();?>assets/admin/pages/scripts/components-editors.js"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
    Metronic.init(); // init metronic core componets
    Layout.init(); // init layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features 
    Index.init();
    Index.initDashboardDaterange();
    Tasks.initDashboardWidget();
    ComponentsEditors.init();

});

$('.table-striped').dataTable();
$('select').select2();

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#photo').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$(".alert").delay(5000).fadeOut(200, function() {
    $(this).alert('close');
});






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
    $(".karense").text(karense)

});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>