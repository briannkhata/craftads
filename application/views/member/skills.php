<?php $this->load->view('header');?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <?=$page_title;?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?=base_url();?>Skill/add" class="btn default green-stripe">
                                Add Skill
                            </a>
                        </div>

                    </div>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Skill</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->M_skill->get_skill_by_user($this->session->userdata('user_id')) as $row):?>
                        <tr>
                            <td><?=$row['skill'];?></td>
                            <td>
                                <a href="<?=base_url();?>Skill/add/<?=$row['skill_id'];?>"
                                    class="btn btn-sm default green-stripe"><i class="fa fa-edit"></i></a>

                                <a href="<?=base_url();?>Skill/delete/<?=$row['skill_id'];?>"
                                    class="btn btn-sm default red-stripe">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer');?>