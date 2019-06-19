<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>App Settings</h3>                
              </div>              
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div>
              <?php if ($this->session->flashdata('sitesettingsupdate')) { ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('sitesettingsupdate') ?> </div>
              <?php } ?>
              </div>

              <div class="x_panel">
                <div class="x_title">                
                  
                  <section id="sitesettingsupdateform" >
                  <form method="post" action="<?php echo base_url() ; ?>index.php/admindashboard/sitesettings" id="UpdateFormSiteSettings" class="form-horizontal form-label-left" enctype="multipart/form-data"> 
                    

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Application Name </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="appname" class="form-control col-md-7 col-xs-12" value="<?php echo $sitesetting[0]['app_name'] ; ?>" id="appname">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Application Slogan </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="appslogan" class="form-control col-md-7 col-xs-12" value="<?php echo $sitesetting[0]['app_slogan'] ; ?>" id="appslogan">
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Application Description </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea col="6" rows="10" class="form-control col-md-7 col-xs-12" name="appdescription" id="appdescription"><?php echo $sitesetting[0]['app_description'] ; ?></textarea>
                        </div>
                      </div>


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Application Email Id </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="appemailid" class="form-control col-md-7 col-xs-12" value="<?php echo $sitesetting[0]['app_emailid'] ; ?>" id="appemailid">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Application Phone Number </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="appphoneno" id="phone" class="form-control col-md-7 col-xs-12" value="<?php echo $sitesetting[0]['app_phone'] ; ?>" id="appphoneno">
                        </div>
                      </div>

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Application Mobile Number </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="appmobileno" class="form-control col-md-7 col-xs-12" value="<?php echo $sitesetting[0]['app_mobile'] ; ?>" id="appmobileno">
                        </div>
                      </div>


                      

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Update Settings</button>
                        </div>
                      </div> 

                  </form>
              	</section>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
<!-- /page content -->







<script>
	function GetPhoneFormat(id) {
		var str = document.getElementById(id).value;
		if (str.length == 3) {
			var ind = str.substring(0, 3);
			document.getElementById(id).value = '('+ind+')';
		}
		if (str.length == 8) {
			var ind = str.substring(0, 8);
			document.getElementById(id).value = ind+'-';
		}
	}
</script>