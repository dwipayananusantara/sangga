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
	<section class="user_profile inner_pages">
		<center>
			<h3>Riwayat Sewa</h3>
		</center>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th width="100">Kode Sewa</th>
							<th width="120">Kostum</th>
							<th width="80">Tgl. Mulai</th>
							<th width="80">Tgl. Selesai</th>
							<th width="50">Durasi</th>
							<th width="100">Biaya Sewa</th>
							<th width="100">Status</th>
							<th width="90">Opsi</th>
						</tr>
					</thead>
					<?php foreach ($data->result_array() as $result) :
					?>
						<tr>
							<td><?php echo $result['id_order']; ?></td>
							<td><?php echo $result['nama_product']; ?></td>
							<td><?php echo IndonesiaTgl($result['ambil']); ?></td>
							<td><?php echo IndonesiaTgl($result['kembali']); ?></td>
							<td><?php echo $result['durasi']; ?></td>
							<td><?php echo format_rupiah($result['harga_total']); ?></td>
							<td><?php echo $result['status_order']; ?></td>
							<td align="center">
								<?php
								if ($result['status_order'] == "Menunggu Pengembalian") {
								?>
									<a href="<?php echo base_url() . 'riwayatsewa/booking_detail/' . $result['id_order']; ?>" class="glyphicon glyphicon-eye-open"></a><br />
									<a href="<?php echo base_url() . 'riwayatsewa/booking_edit/' . $result['id_order'] . '/pengembalian'; ?>"><u>Input Data Pengembalian<u /></a>
								<?php
								} elseif ($result['status_order'] == "Sudah Dibayar" || $result['status_order'] == "Selesai" || $result['tgl_pengembalian_user'] != "" || $result['status_order'] == "Cancel" || $result['status_order'] == 'Hilang/Rusak') {
								?>
									<a href="<?php echo base_url() . 'riwayatsewa/booking_detail/' . $result['id_order']; ?>" class="glyphicon glyphicon-eye-open"></a>
									<?php ?>
								<?php
								} else {
								?>
									<a href="<?php echo base_url() . 'riwayatsewa/booking_detail/' . $result['id_order']; ?>" class="glyphicon glyphicon-eye-open"></a><br />
									<a href="<?php echo base_url() . 'riwayatsewa/booking_edit/' . $result['id_order'] . '/pembayaran'; ?>"><u>Upload Bukti Bayar<u /></a>
								<?php } ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
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