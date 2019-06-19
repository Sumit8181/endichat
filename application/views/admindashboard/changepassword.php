<!-- page content -->

        <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>Change This Super Admin Panel Password</h3>                

              </div>

            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">


              <div id="popupmenusedd">

                <?php if ($this->session->flashdata('changepasswordmessage')) { ?>

                  <div class="alert alert-success"> <?= $this->session->flashdata('changepasswordmessage') ?> </div>

                <?php } ?>

              </div>


              <div class="x_panel">

                <div class="x_title">

                  <section id="sitesettingsupdateform" >

                  <form method="post" action="<?php echo base_url() ; ?>index.php/admindashboard/changepasswordprocess" id="changepassword" class="form-horizontal form-label-left" enctype="multipart/form-data"> 
                    

                     <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Old Password </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="password" name="oldpassword" class="form-control col-md-7 col-xs-12" id="oldpassword">

                        </div>

                      </div>


                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="password" name="newpassword" class="form-control col-md-7 col-xs-12" id="newpassword">

                        </div>

                      </div>


                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Confirm Password </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <input type="password" name="confirmpassword" class="form-control col-md-7 col-xs-12" id="confirmpassword">

                        </div>

                      </div>


                      <div class="form-group">

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                            <button type="submit" class="btn btn-success">Change Password</button>

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
$(function() {
   $('#popupmenusedd').delay(3000).fadeOut();
});
</script>
