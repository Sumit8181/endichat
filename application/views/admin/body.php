<div class="wrapper">
	<div class="container">
	<div id="popupmenu">
	<?php
		if($this->session->flashdata('superadminloginfail')) {
			$errorarr = $this->session->flashdata('superadminloginfail');
	?>
			<div class="<?php echo $errorarr['class'] ; ?>"><?php echo $errorarr['message'] ; ?></div>
	<?php
		}
	?>
	</div>

		<img src="<?php echo base_url() ; ?>assets/admin/images/Endichat_LOGO.png" class="img-circle profile_img" >
		
		<h2><?php echo $admin_heading ; ?></h2>
		<section id="adminloginformarea" class="">
		<form class="form" method="POST" action="<?php echo base_url() ; ?>index.php/admin/admin_login_processor" id="adminLoginForm">
			<input type="text" id="username" name="username" placeholder="Username" class="form-admin">
			<input type="password" id="password" name="password" placeholder="Password" class="form-admin">
			<button type="submit" id="login-button">Login</button>
		</form>
		</section>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>