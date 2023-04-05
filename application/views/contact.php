<?php $this->load->view('headerr');?>

    <!--************************************
        Header End
    *************************************-->
    <!--************************************
        Home Slider Start
    *************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
      <figure data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%" style="background-image: url('<?=base_url();?>front/banner.jpg');">
        <figcaption>
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-bannercontent">
                  <form class="tg-formtheme tg-formbannersearch">
                    <fieldset>
                   
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </figcaption>
      </figure>
      <div class="tg-breadcrumbarea">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--************************************
        Home Slider End
    *************************************-->
    <!--************************************
        Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
      <!--************************************
          Contact Us Start
      *************************************-->
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="tg-content" class="tg-content">
              
              <div class="tg-contactarea">
                <div class="tg-sectionhead">
                  <div class="tg-title">
                    <h2>Get In Touch With Us</h2>
                  </div>
                  <div class="tg-description">
                    <p>Feel Free To Say Hello</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="" class="tg-locationmap">
                     Phone :  <?=$this->db->get('settings')->row()->phone;?><br>
                     Email :  <a href="mailto:<?=$this->db->get('settings')->row()->email;?>">
                       <?=$this->db->get('settings')->row()->email;?>
                     </a><br>
                     <b>Address</b><br>  <?=$this->db->get('settings')->row()->address;?>

                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone*">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                      </div>
                      
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                          <textarea class="form-control" id="enquiry" name="enquiry" placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <button class="tg-btn" type="button" onclick="save_enquiry()">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--************************************
          Contact Us End
      *************************************-->
    </main>
    <!--************************************
        Main End
    *************************************-->
    <!--************************************
        Footer Start
    *************************************-->
<?php $this->load->view('footerr');?>
<script type="text/javascript">
  function save_enquiry(){
    try
    {

      if(document.getElementById("email").value =='' || 
        document.getElementById("phone").value =='' ||
        document.getElementById("name").value =='' ||
        document.getElementById("enquiry").value ==''){
        alert('Fill all fields');
      }else{

      $.post("<?=base_url();?>home/save_enquiry",
      {
        name: document.getElementById("name").value,
        enquiry: document.getElementById("enquiry").value,
        phone: document.getElementById("phone").value,
        email: document.getElementById("email").value
      },
      function(data,status){
         alert('Thank you for contacting us..We will get back to you ASAP...');
         location.reload();
        
      });
    }
  }
    catch(err)
    {
      //Clear 
      alert(err);
    }
  }
</script>
