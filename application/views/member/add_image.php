					<?php $this->load->view('header');?>
					<style>
input[type="file"] {
    border: 1px solid #ccc;
    padding: 5px;
    background-color: white;
    color: black;
    font-size: 16px;
    border-radius: 4px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

.file-drop-box {
    border: 2px dashed #ccc;
    padding: 20px;
    display: inline-block;
    text-align: center;
}

.file-input {
    display: none;
}

label[for="image-upload"] {
    font-size: 16px;
    color: #777;
    cursor: pointer;
}
					</style>
					<div class="portlet box grey-cascade">
					    <div class="portlet-title">
					        <div class="caption"><?=$page_title;?></div>
					    </div>
					    <div class="portlet-body form">
					        <form action="<?=base_url();?>image/save" method="post" class="horizontal-form"
					            enctype="multipart/form-data">
					            <div class="form-body">
					                <div class="row">
					                    <div class="col-md-12">

					                        <div class="file-drop-box">
					                            <input type="file" name="image" id="image-upload"
					                                value="<?php if (!empty($image)){echo $image;}?>" accept="image/*"
					                                class="file-input" required>
					                            <label for="image-upload">Drag and drop your files here or click to select</label>
					                        </div>
					                        <br><br>

					                    </div><input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
					                    <div class="col-md-12">
					                        <div class="form-group"><label class="control-label">Title</label><input type="text"
					                                name="title" class="form-control" value="<?php if (!empty($title)){echo $title;}?>"
					                                required></div>
					                    </div>
					                </div>
					            </div>
					            <div class="form-actions left"><?php if (isset($update_id)) {
    ?><input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>"><?php
}

?><button type="submit" class="btn default blue-stripe">Save</button></div>
					        </form>
					    </div><?php $this->load->view('footer');
?>