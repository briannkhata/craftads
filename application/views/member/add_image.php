					<?php $this->load->view('header');?>

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
					                        <div class="form-group">
					                            <label class="control-label">Select Image</label>
					                            <input type="file" name="image" id="image"
					                                value="<?php if (!empty($image)){echo $image;}?>" accept="image/*"
					                                class="file-input" required>
					                            <br>
					                            <img src="<?=base_url();?>uploads/gallery/<?php if (isset($image)){echo $image;}?>"
					                                id="preview-image" width="400" height="300" class="img-responsive">
					                            <br>
					                        </div>
					                    </div>

					                    <input type="hidden" name="user_id" value="<?=$this->session->userdata('user_id');?>">
					                    <div class="col-md-12">
					                        <div class="form-group">
					                            <label class="control-label">Title</label>
					                            <input type="text" name="title" class="form-control"
					                                value="<?php if (!empty($title)){echo $title;}?>" required>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="form-actions left">
					                <?php if (isset($update_id)) {
    ?><input type="hidden" name="update_id" id="update_id" value="<?=$update_id;?>"><?php
}

?><button type="submit" class="btn default blue-stripe">Save</button></div>
					        </form>
					    </div><?php $this->load->view('footer');?>
					    <script>
					    const inputElement = document.querySelector('#image');
					    const previewImage = document.querySelector('#preview-image');

					    inputElement.addEventListener('change', (event) => {
					        const file = event.target.files[0];
					        const reader = new FileReader();

					        reader.readAsDataURL(file);
					        reader.onload = () => {
					            previewImage.src = reader.result;
					        }
					    });
					    </script>