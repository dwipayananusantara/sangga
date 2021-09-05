<?php
include('format_rupiah.php');
include('library.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="rental mobil">
	<meta name="author" content="">

	<title>Cetak Detail Sewa</title>

	<link href="admin/img/fav.png" rel="icon" type="images/x-icon">

	<!-- Bootstrap Core CSS -->
	<link href="assets/new/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="assets/new/offline-font.css" rel="stylesheet">
	<link href="assets/new/custom-report.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="assets/new/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- jQuery -->
	<script src="assets/new/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<section id="header-kop">
		<div class="container-fluid">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td rowspan="3" width="16%" class="text-center">
							<img src="<?php echo base_url() . 'assets/images/mylogo.png' ?>" alt="logo-dkm" width="80" />
						</td>
						<td class="text-center">
							<h3>Sanggar Dwipayana</h3>
						</td>
						<td rowspan="3" width="16%">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center">Phone : +62 823-2275-3411 | E-mail : dwipayananusantara1234@gmail.com</td>
					</tr>
					<tr>
						<td class="text-center">Bekasi</td>
					</tr>
				</tbody>
			</table>
			<hr class="line-top" />
		</div>
	</section>
	<?php
	error_reporting(0);
	$result = $data->row_array();
	//$c=$samp->row_array();
	$metode_bayar = $this->db->query("select * from metode_bayar");
	?>

	<section id="body-of-report">
		<div class="container-fluid">
			<h4 class="text-center">Detail Sewa</h4>
			<br />
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td width="23%">No. Sewa</td>
						<td width="2%">:</td>
						<td><?php echo $result['id_order']; ?></td>
					</tr>
					<tr>
						<td>Penyewa</td>
						<td>:</td>
						<td><?php echo $result['nama'] ?></td>
					</tr>
					<tr>
						<td>Baju</td>
						<td>:</td>
						<td><?php echo $result['nama_product']; ?></td>
					</tr>
					<tr>
						<td>Tanggal Mulai</td>
						<td>:</td>
						<td><?php echo IndonesiaTgl($result['ambil']); ?></td>
					</tr>
					<tr>
						<td>Tanggal Selesai</td>
						<td>:</td>
						<td><?php echo IndonesiaTgl($result['kembali']); ?></td>
					</tr>
					<tr>
						<td>Durasi</td>
						<td>:</td>
						<td><?php echo $result['durasi']; ?> Hari</td>
					</tr>
					<tr>
						<td>Biaya Sewa (<?php echo $result['durasi']; ?>) Hari</td>
						<td>:</td>
						<td><?php echo format_rupiah($result['harga_kostum']); ?></td>
					</tr>
					<tr>
						<td>Deposit</td>
						<td>:</td>
						<td><?php echo format_rupiah($result['harga_deposit']); ?></td>
					</tr>
					<tr>
						<td>Quantity</td>
						<td>:</td>
						<td><?php echo format_rupiah($result['quantity']); ?></td>
					</tr>
					<tr>
						<td>Total Biaya</td>
						<td>:</td>
						<td><?php echo format_rupiah($result['harga_total']); ?></td>
					</tr>
					<?php foreach ($metode_bayar->result_array() as $metode) :
					?>
						<tr>
							<td colspan='3'>Silahkan Di transfer ke Rekening <b><?php echo $metode['bank'] . ' a/n ' . $metode['atasnama']; ?></b>
								<p>Dengan Nomor Rekening <b><?php echo $metode['norek']; ?></b></p>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div><!-- /.container -->
	</section>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#jumlah').terbilang({
				'style': 3,
				'output_div': "jumlah2",
				'akhiran': "Rupiah",
			});

			window.print();
		});
	</script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url() . 'front/js/new/bootstrap.min.js' ?>"></script>
	<!-- jTebilang JavaScript -->
	<script src="<?php echo base_url() . 'front/js/new/jTerbilang.js' ?>"></script>

</body>

</html>