<footer id="tg-footer" class="tg-footer tg-haslayout">
      <!--div class="tg-footerbar">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
              <div class="tg-newsletter">
                
              </div>
            </div>
          </div>
        </div>
      </div-->
      <div class="clearfix"></div>
      <div class="container">
        <div class="row">
          <div class="tg-footerinfo">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
              <div class="tg-widget tg-widgetsearchbylocations">
                <div class="tg-widgettitle">
                  <h3>Search By Locations:</h3>
                </div>
                <div class="tg-widgetcontent">
                  <ul>
                    <?php foreach ($this->M_district->get_districts_ten() as $dis) {?>
                     
                    <li><a href="javascript:void(0);">-  <?=$dis['district'];?></a></li>
                  <?php }?>

                  </ul>
                  <ul>
                   <?php foreach ($this->M_location->get_locations_nine() as $dis) {?>
                    <li><a href="javascript:void(0);">-  <?=$dis['location'];?></a></li>
                  <?php }?>
                    <li><a href="#">View All</a></li>

                 
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <div class="tg-widget tg-widgettext">
                <div class="tg-widgetcontent">
                  <strong class="tg-logo"><a href="javascript:void(0);">
                    <img src="<?=base_url();?>uploads/logo.png"></a></strong>
                  <div class="tg-description">
                    <p><?=substr($this->db->get('settings')->row()->about,0,500);?></p>
                  </div>
                  <div class="tg-followus">
                    <strong>Follow Us:</strong>
                    <ul class="tg-socialicons">
                      <li class="tg-facebook">
                        <a href="<?=$this->db->get('settings')->row()->facebook;?>"><i class="fa fa-facebook"></i></a></li>
                      <li class="tg-twitter">
                        <a href="<?=$this->db->get('settings')->row()->twitter;?>"><i class="fa fa-twitter"></i></a></li>
                      <li class="tg-youtube">
                        <a href="<?=$this->db->get('settings')->row()->youtube;?>"><i class="fa fa-youtube"></i></a></li>
                      <li class="tg-instagram">
                        <a href="<?=$this->db->get('settings')->row()->instagram;?>"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <ul class="tg-appsnav">
                      <!--li><a href="<?=base_url();?>uploads/craft_ads_network.apk"><img src="<?=base_url();?>uploads/dIcon.jfif" alt="Download the Android Application"></a></li-->
                      <li><a href="<?=base_url();?>uploads/craft_ads_network.apk" target="blank" onclick="app_downloads()"><img src="<?=base_url();?>front/images/apps-02.png" alt="Download Android Application"></a></li>
                    </ul>
                  </div>
                  <nav class="tg-footernav">
                    <ul>
                      <li><a href="javascript:void(0);">Terms of Use</a></li>
                      <li><a href="javascript:void(0);">News</a></li>
                    </ul>
                  </nav>
                  <span class="tg-copyright"><?=date('Y');?> All Rights Reserved &copy; 
                    <?=$this->db->get('settings')->row()->app;?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--************************************
        Footer End
    *************************************-->
  </div>
  <!--************************************
      Wrapper End
  *************************************-->
  <!--************************************
      Theme Modal Box Start
  *************************************-->
  <div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
      <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <div class="modal-content tg-thememodalcontent">
        <div class="tg-title">
          <strong>Change Currency</strong>
        </div>
        <form class="tg-formtheme tg-formselectcurency">
          <fieldset>
            <div class="form-group">
              <div id="tg-flagstrapone" class="tg-flagstrap" data-input-name="country"></div>
            </div>
            <div class="form-group">
              <button class="tg-btn" type="button">Change Now</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
      <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <div class="modal-content tg-thememodalcontent">
        <div class="tg-title">
          <strong>Currency Converter</strong>
        </div>
        <form class="tg-formtheme tg-formcurencyconverter">
          <fieldset>
            <div class="form-group">
              <div id="tg-flagstraptwo" class="tg-flagstrap" data-input-name="country"></div>
              <div class="tg-curencyrateetc">
                <span>120<sup>$</sup></span>
                <p>1 USD = 0.784769 GBP</p>
              </div>
            </div>
            <div class="form-group">
              <span class="tg-iconseprator"><i><img src="<?=base_url();?>front/images/icons/img-36.png" alt="image description"></i></span>
            </div>
            <div class="form-group">
              <div id="tg-flagstrapthree" class="tg-flagstrap" data-input-name="country"></div>
              <div class="tg-curencyrateetc">
                <span>94.1723<sup>£</sup></span>
                <p>1 GBP = 1.27426 USD</p>
              </div>
            </div>
            <div class="form-group">
              <span class="tg-lastupdate">Last update on <time datetime="2017-08-08">2017-06-12 12:35 local time</time></span>
            </div>
            <div class="form-group">
              <button class="tg-btn" type="button">Convert Now</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <!--************************************
      Theme Modal Box End
  *************************************-->
  <script src="<?=base_url();?>front/js/vendor/jquery-library.js"></script>
  <script src="<?=base_url();?>front/js/vendor/bootstrap.min.js"></script>
  <script src="<?=base_url();?>front/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
  <script src="<?=base_url();?>front/JS/responsivethumbnailgallery.js"></script>
  <script src="<?=base_url();?>front/js/jquery.flagstrap.min.js"></script>
  <script src="<?=base_url();?>front/js/backgroundstretch.js"></script>
  <script src="<?=base_url();?>front/js/owl.carousel.min.js"></script>
  <script src="<?=base_url();?>front/js/jquery.vide.min.js"></script>
  <script src="<?=base_url();?>front/js/jquery.collapse.js"></script>
  <script src="<?=base_url();?>front/js/scrollbar.min.js"></script>
  <script src="<?=base_url();?>front/js/prettyPhoto.js"></script>
  <script src="<?=base_url();?>front/js/jquery-ui.js"></script>
  <script src="<?=base_url();?>front/js/countTo.js"></script>
  <script src="<?=base_url();?>front/js/appear.js"></script>
  <script src="<?=base_url();?>front/select2.min.js"></script>
  <script src="<?=base_url();?>front/js/main.js"></script>
</body>
</html>

   <script type="text/javascript">
       //$("select").select2();
        function app_downloads() {
          $.post("<?=base_url();?>home/app_downloads",
             { 
              },
          function(response){
             console.log(response);
          });
       }
    </script>