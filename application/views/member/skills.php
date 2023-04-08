<?php $this->load->view('header');?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <?=$page_title;?>
                </div>

            </div>
            <div class="portlet-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>Skill</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($this->M_skill->get_skill_by_id($this->session->userdata('user_id')) as $row):?>
                        <tr>
                            <td><?=$row['skill'];?></td>
                        </tr>
                        <td>
                            <a href="<?=base_url();?>Skill/delete/<?=$row['skill_id'];?>">Delete</a>
                        </td>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<?php $this->load->view('footer');?>