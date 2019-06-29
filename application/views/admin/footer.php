<script  src="<?php echo base_url() ; ?>assets/admin/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
label.error { color: red !important; font-size: 14px !important;}
#adminloginformarea .form-admin.error{ border-color: red !important;}
</style>
<script>
	$.noConflict();
		jQuery( document ).ready(function( $ ) {
		  $("#adminLoginForm").validate({
		    rules: {
		        username: {required: true}   
		       ,password: {required: true}
		    },
		    messages: {
		        username: "Please enter Username."
		      , password: "Please enter password."
		    }
		});
	});
</script>

<script>
(function ($) {
	$(function() {
	 $('#popupmenu').delay(3000).fadeOut();
	});
})(jQuery);
</script>
</body>
</html>