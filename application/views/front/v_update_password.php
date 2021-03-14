<?php
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<?php include('head.php'); ?>

<body>

	<!-- Start Switcher -->
	<!-- <?php include('colorswitcher.php'); ?> -->
	<!-- /Switcher -->

	<!--Header-->
	<?php include('header.php'); ?>
	<!-- /Header -->
	<!-- /Page Header-->
	<section class="user_profile inner_pages">
		<div class="container">
			<div class="user_profile_info">
				<div class="col-md-12 col-sm-10">
					<form method="post" action="<?php echo base_url() . 'update_password/update' ?>">
						<div class="form-group">
							<label class="control-label">Password Baru</label>
							<input class="form-control white_bg" name="password" id="password" type="password" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn">Update Password <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--/Profile-setting-->
	<!--/Profile-setting-->
	<!--Footer -->
	<?php include "footer.php"; ?>
	<?php include "loader.php"; ?>
	<!-- /Footer-->
	<!--Back to top-->
	<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
	<!--/Back to top-->

	<!--Login-Form -->
	<?php include('login.php'); ?>
	<!--/Login-Form -->

	<!--Register-Form -->
	<?php include('registration.php'); ?>

	<!--/Register-Form -->

	<!--Forgot-password-Form -->
	<?php include('forgotpassword.php'); ?>
	<!--/Forgot-password-Form -->
</body>

</html>