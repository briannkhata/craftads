<?php $this->load->view('header');?>
<div class="portlet box grey-cascade">
    <div class="portlet-title">
        <div class="caption">
            <?=$page_title;?> |
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <form action="<?=base_url();?>Skill/save" method="post" class="horizontal-form">
            <div class="form-body">

                <div class="row">

                    <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Skill</label>
                            <input type="text" class="form-control" name="skill[]">
                        </div>
                    </div>
                    <div id="newRow">
                    </diV>
                </div>
                <div class="form-actions left">

                    <button type="button" class="btn default green-stripe" onclick="addSkillField()">
                        <i class="fa fa-plus-circle"></i> Add Row
                    </button>
                    <button type="submit" class="btn default blue-stripe"> Save</button>
                </div>
        </form>
    </div>
    <!-- END FORM-->
</div>
<?php $this->load->view('footer');?>
<script>
function addSkillField() {
    var field = '<div class="col-md-12">' +
        '<div class="form-group">' +
        '<label class="control-label">Skill</label>' +
        '<input type="text" class="form-control" name="skill[]">' +
        '</div>' +
        '</div>';
    $('#newRow').append(field);
}
</script>