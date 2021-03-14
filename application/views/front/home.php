<?php
include('format_rupiah.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<?php include('head.php'); ?>

<body>

	<!-- Start Switcher -->
	<!-- <?php include('colorswitcher.php'); ?> -->
	<!-- /Switcher -->

	<!--Header-->
	<?php include('header.php'); ?>
	<!-- /Header -->


	<!-- Banners -->
	<div id="owl-demo">
		<div class="item"><center><img width="1300" height="500" src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities('Banner1.png'); ?>" alt="Owl Image"></center></div>
		<div class="item"><center><img width="1300" height="500" src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities('Banner2.png'); ?>" alt="Owl Image"></center></div>
		<div class="item"><center><img width="1300" height="500" src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities('Banner3.png'); ?>" alt="Owl Image"></center></div>
	</div>
	<!-- /Banners -->

	<!-- Resent Cat-->
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">

				<!-- Nav tabs -->
				<div class="recent-tab">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Kostum Terbaru</a></li>
					</ul>
				</div>
				<!-- Recently Listed New Cars -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="resentnewcar">
						<?php
						foreach ($product->result_array() as $i) {
							$id_product = $i['id_product'];
							$nama_product = $i['nama_product'];
							$harga_product = $i['harga_product'];
							$gambar = $i['gambar'];
							$deskripsi = $i['deskripsi'];

						?>

							<div class="col-list-3">
								<div class="recent-car-list">
									<div class="car-info-box"> <a href="<?php echo base_url() . 'product/detail_product/' . $id_product ?>"><img src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities($gambar); ?>" class="img-responsive" alt="image"></a>
									</div>
									<div class="car-title-m">
										<h6><a href="<?php echo base_url() . 'product/detail_product/' . $id_product ?>" align='center'><?php echo htmlentities($nama_product); ?></a></h6>
										<span class="price"><?php echo htmlentities(format_rupiah($harga_product)); ?> / 3 Hari</span>
									</div>
									<div class="inventory_info_m">
										<p><?php echo substr($deskripsi, 0, 70); ?></p>
									</div>
								</div>
							</div>
						<?php } ?>

					</div>
				</div>
			</div>
	</section>
	<!-- /Resent Cat -->


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

	<!-- Scripts -->
	<script>
		$(document).ready(function() {

			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds

				items: 1,
				itemsDesktop: [1199, 3],
				itemsDesktopSmall: [979, 3]

			});

		});
	</script>

</body>

</html>