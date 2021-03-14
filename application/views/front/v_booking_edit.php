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
	$metode_bayar = $this->db->query("SELECT * FROM metode_bayar");
	?>
	<section class="user_profile inner_pages">
		<center>
			<h3>Detail Sewa</h3>
		</center>
		<div class="container">
			<div class="user_profile_info">
				<div class="col-md-12 col-sm-10">
					<form method="post" action="<?php echo base_url() . 'backend/orders/pembayaran_orders' ?>" name="sewa" enctype="multipart/form-data">
						<input type="hidden" class="form-control" name="kode" value="<?php echo $result['id_order']; ?>" required>
						<div class="form-group">
							<label>Kode Sewa</label>
							<input type="text" class="form-control" name="mobil" value="<?php echo $result['id_order']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Kostum</label>
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
						<input type="hidden" class="form-control" name="tipe" value="<?php echo $tipe; ?>" readonly>
						<div class="form-group">
							<label>Durasi</label>
							<input type="text" class="form-control" name="durasi" value="<?php echo $result['durasi']; ?> Hari" readonly>
						</div>
						<div class="form-group">
							<label>Biaya Sewa (<?php echo $result['durasi']; ?> Hari)</label><br />
							<input type="text" class="form-control" name="total" value="<?php echo format_rupiah($result['harga_total']); ?>" readonly>
						</div>
						<?php if ($tipe == 'pembayaran') { ?>
							<div class="form-group">
								<label>Atas Nama</label><br />
								<input type="text" class="form-control" name="nama">
							</div>
							<div class="form-group">
								<label>Jumlah</label><br />
								<input type="number" class="form-control" name="jumlah">
							</div>
							<div class="form-group">
								<label>Metode</label><br />
								<select name="metode" id="metode" class="form-control" required>
									<?php foreach ($metode_bayar->result_array() as $k) :
										$id_metode = $k['id_metode'];
										$bank = $k['bank'];
										$norek = $k['norek'];
										$atasnama = $k['atasnama'];
										$metode = $k['metode'];
									?>
										<option value="<?php echo $id_metode; ?>">
											<?php echo $metode; ?> - <?php echo $bank; ?> - [<?php echo $norek; ?>] - <?php echo $atasnama; ?>
										</option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label>Upload Bukti Pembayaran</label><br />
								<input type="file" class="form-control" name="filefoto" accept="image/*" required />
							</div>
						<?php } else { ?>
							<div class="form-group">
								<label>Tanggal Pengembalian</label><br />
								<input type="date" class="form-control" name="tgl_pengembalian_user" required />
							</div>
							<div class="form-group">
								<label>Review</label>
								<input type="text" class="form-control" name="review" required />
							</div>
							<div class="form-group">
								<label>Gambar Review</label><br />
								<input type="file" class="form-control" name="filefoto" accept="image/*" required />
							</div>
							<div class="hr-dashed"></div>
						<?php } ?>
						<div class="form-group">
							<button class="btn btn-primary" type="submit" name="submit">Submit</button>
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
	<?php if ($this->session->flashdata('msg') == 'info') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Info',
				text: "Order berhasil di update",
				showHideTransition: 'slide',
				icon: 'info',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#00C9E6'
			});
		</script>
	<?php elseif ($this->session->flashdata('msg') == 'success') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Success',
				text: "Upload Bukti Pembayaran Selesai",
				showHideTransition: 'slide',
				icon: 'success',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#7EC857'
			});
		</script>
	<?php elseif ($this->session->flashdata('msg') == 'success-add') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Success',
				text: "Order Berhasil dibuat",
				showHideTransition: 'slide',
				icon: 'success',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#7EC857'
			});
		</script>
	<?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Success',
				text: "Order Berhasil dihapus.",
				showHideTransition: 'slide',
				icon: 'success',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#7EC857'
			});
		</script>
	<?php elseif ($this->session->flashdata('msg') == 'warning') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Warning',
				text: "Gambar yang Anda masukan terlalu besar.",
				showHideTransition: 'slide',
				icon: 'warning',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#FFC017'
			});
		</script>
	<?php else : ?>

	<?php endif; ?>
</body>

</html>