

<!-- footer content -->
        <footer>
          <div class="pull-left">
            &copy; 2019-2020 All Rights Reserved | <a href="http://www.endichat.com/" target="_blank">EndiChat</a> Mobile Apps Admin Panel
          </div>
          <div class="pull-right">
            Designed & Developed By <a href="https://www.createwebsiteservice.com/" target="_blank">Create Website Service, LLC</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->


    <!-- <script src="https://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/jquery/dist/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ; ?>assets/admindashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ; ?>assets/admindashboard/build/js/custom.min.js"></script>
  


<?php if($this->router->fetch_class() == 'admindashboard' && $this->router->fetch_method() == 'sitesettings') { ?>

<style>
  label.error { color: red !important; font-size: 14px !important;}
  #sitesettingsupdateform .form-control .error{ border-color: red !important;}
</style>
<script>

          $("#UpdateFormSiteSettings").validate({
            rules: {
                appname: {required: true}   
               ,appslogan: {required: true}
               ,appdescription: {required: true}
               ,appemailid: {required: true,
                                email: true}
               ,appphoneno: {required: true,
                                minlength: 10,
                                maxlength: 10}
               ,appmobileno: {required: true,
                                minlength: 10,
                                maxlength: 10}
            },

            messages: {
                appname: "Please enter this application name."
              , appslogan: "Please enter this application slogan."
              , appdescription: "Please enter this ."
              , settingsphone: "Please enter Site Phone number / 10 digit phone number."
              , settingsmobile: "Please enter Site Mobile number / 10 digit phone number."
              , settingsmetatitle: "Please enter Site meta title."
              , settingsmetadesc: "Please enter Site meta description."
              , settingsmetakey: "Please enter Site meta keyword."
            }
        });

</script>

<?php } ?>




  </body>
</html>