<?php
error_reporting(0);
include('format_rupiah.php');
include('library.php');
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
	<?php
	error_reporting(0);
	$result = $data->row_array();
	?>
	<section class="user_profile inner_pages">
		<center>
			<h3>Detail Sewa</h3>
		</center>
		<div class="container">
			<div class="user_profile_info">
				<div class="col-md-12 col-sm-10">
					<form method="post" name="sewa"">
						<input type="hidden" class="form-control" name="id" value="<?php echo $result['id_product']; ?>" required>
						<div class="form-group">
							<label>Kode Sewa</label>
							<input type="text" class="form-control" name="mobil" value="<?php echo $result['id_order']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Baju</label>
							<input type="text" class="form-control" name="mobil" value="<?php echo $result['nama_product']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal Mulai</label>
							<input type="date" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" value="<?php echo $result['ambil']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Tanggal Selesai</label>
							<input type="date" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" value="<?php echo $result['kembali']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Durasi</label>
							<input type="text" class="form-control" name="durasi" value="<?php echo $result['durasi']; ?> Hari" readonly>
						</div>
						<div class="form-group">
							<label>Biaya Sewa (<?php echo $result['durasi']; ?> Hari)</label><br />
							<input type="text" class="form-control" name="total" value="<?php echo format_rupiah($result['harga_total']); ?>" readonly>
						</div>
						</b>
						<br /><br />
						<div class="form-group">
							<a href="<?php echo base_url() . 'backend/orders/get_invoice/'.$result['id_order']; ?>" target="_blank" class="btn btn-primary btn-xs">Cetak</a>
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