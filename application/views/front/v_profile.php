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
	<!--Page Header-->
	<section class="page-header profile_page">
		<div class="container">
			<div class="page-header_wrap">
				<div class="page-heading">
					<h1>Profil Anda</h1>
				</div>
				<ul class="coustom-breadcrumb">
					<li><a href="#">Beranda</a></li>
					<li>Profile</li>
				</ul>
			</div>
		</div>
		<!-- Dark Overlay-->
		<div class="dark-overlay"></div>
	</section>
	<!-- /Page Header-->
	<?php
	error_reporting(0);
	$data = $data->row_array();
	?>
	<section class="user_profile inner_pages">
		<div class="container">
			<div class="user_profile_info">

				<div class="col-md-12 col-sm-10">
					<form method="post" name="theform" action="<?php echo base_url() . 'profile/update' ?>">
						<div class="form-group">
							<label class="control-label">Nama</label>
							<input class="form-control white_bg" name="nama" value="<?php echo $data['nama']; ?>" id="nama" type="text" required>
						</div>
						<div class="form-group">
							<label class="control-label">Alamat Email</label>
							<input class="form-control white_bg" value="<?php echo $data['email']; ?>" name="email" id="email" type="email" required readonly>
						</div>
						<div class="form-group">
							<label class="control-label">Telepon</label>
							<input class="form-control white_bg" name="phone" value="<?php echo $data['phone']; ?>" id="phone" type="number" min="0" required>
						</div>
						<div class="form-group">
							<label class="control-label">Alamat</label>
							<textarea class="form-control white_bg" name="alamat" rows="4"><?php echo $data['alamat']; ?></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="updateprofile" class="btn">Simpan Perubahan <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
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