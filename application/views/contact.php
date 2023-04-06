<?php include 'headerr.php';?>

<!-- /Header -->

<!-- Breadcrumb -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-title">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <!-- <div class="col-auto float-end ms-auto breadcrumb-menu">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div> -->
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<section class="contact-us">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="<?=base_url();?>Home/save_enquiry" method="post">
                        <div class="contact-queries">
                            <h4 class="mb-4">Drop your Queries</h4>
                            <div class="row">
                                <div class="form-group col-xl-12">
                                    <label class="me-sm-2">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" required>
                                </div>

                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Email</label>
                                    <input class="form-control" type="email" name="email" id="email">
                                </div>
                                <div class="form-group col-xl-6">
                                    <label class="me-sm-2">Phone</label>
                                    <input class="form-control" type="text" name="phone" id="phone" required>
                                </div>
                                <div class="form-group col-xl-12">
                                    <label class="me-sm-2">Message</label>
                                    <textarea class="form-control" name="enquiry" id="enquiry" rows="5"></textarea>
                                </div>
                                <div class="col-xl-12 mb-4">
                                    <button class="btn btn-primary btn-lg ps-5 pe-5" type="button"
                                        onclick="save_enquiry()">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-lg-4">
                    <div class="contact-details">
                        <div class="contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-data">
                                <h4>Address</h4>
                                <p><?=$this->db->get('settings')->row()->address;?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="contact-info">
                            <i class="fas fa-phone-alt"></i>
                            <div class="contact-data">
                                <h4>Phone</h4>
                                <p><?=$this->db->get('settings')->row()->phone;?></p>
                                <p><?=$this->db->get('settings')->row()->phone2;?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="contact-info">
                            <i class="fab fa-facebook"></i>
                            <div class="contact-data">
                                <h4>Facebook</h4>
                                <p><a href="<?=$this->db->get('settings')->row()->facebook;?>">Craft Ads</a> </p>
                            </div>
                        </div>
                        <hr>
                        <!-- <div class="contact-info">
                            <i class="fab fa-twitter"></i>
                            <div class="contact-data">
                                <h4>Twitter</h4>
                                <p><a href="<?=$this->db->get('settings')->row()->twitter;?>">Craft Ads</a> </p>
                            </div>
                        </div>
                        <hr>

                        <div class="contact-info">
                            <i class="fab fa-instagram"></i>
                            <div class="contact-data">
                                <h4>Instagram</h4>
                                <p><a href="<?=$this->db->get('settings')->row()->instagram;?>">Craft Ads</a> </p>
                            </div>
                        </div>
                        <hr>

                        <div class="contact-info">
                            <i class="fab fa-linkedin"></i>
                            <div class="contact-data">
                                <h4>Linkedin</h4>
                                <p><a href="<?=$this->db->get('settings')->row()->linkedin;?>">Craft Ads</a> </p>
                            </div>
                        </div>
                        <hr> -->

                        <div class="contact-info">
                            <i class="far fa-envelope"></i>
                            <div class="contact-data">
                                <h4>Email</h4>
                                <p><?=$this->db->get('settings')->row()->email;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'footerr.php';?>