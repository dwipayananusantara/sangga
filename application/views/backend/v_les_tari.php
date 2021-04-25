<!--Counter Inbox-->
<?php
error_reporting(0);
$metode_bayar = $this->db->query("SELECT * FROM metode_bayar");
$id_user = $this->session->userdata('id_user');
if ($this->session->userdata('akses') != '1') {

	$query2 = $this->db->query("SELECT * FROM orders WHERE status <> 'LUNAS' and id_user = $id_user and is_delete <> 1 and is_rusak <> 1");
	$query3 = $this->db->query("select * from pembayaran
	left join orders
	on orders.id_order = pembayaran.id_order
	where id_user = $id_user");
} else {

	$query2 = $this->db->query("SELECT * FROM orders WHERE status <> 'LUNAS' and is_delete <> 1 and is_rusak <> 1");
	$query3 = $this->db->query("SELECT * FROM pembayaran");
}

$jum_order = $query2->num_rows();
$jum_konfirmasi = $query3->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sanggar Seni Dwipayana Nusantara | Data Kursus Tari List</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/datatables.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<?php
		$this->load->view('backend/v_header');
		?>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">Menu Utama</li>
					<?php if ($this->session->userdata('akses') != '1') { ?>
						<li>
							<a href="<?php echo base_url() ?>">
								<i class="fa fa-home"></i> <span>Home</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
						<li >
							<a href="<?php echo base_url() . 'backend/orders' ?>">
								<i class="fa fa-bell"></i> <span>Orders</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"><?php echo $jum_order; ?></small>
								</span>
							</a>
						</li>

						<li class="active">
							<a href="<?php echo base_url() . 'backend/les_tari' ?>">
								<i class="fa fa-child"></i> <span>Data Kursus Tari</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"></small>
								</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url() . 'login/logout' ?>">
								<i class="fa fa-sign-out"></i> <span>Sign Out</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
					<?php } else { ?>
						<li>
							<a href="<?php echo base_url() . 'backend/dashboard' ?>">
								<i class="fa fa-home"></i> <span>Dashboard</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'backend/pengguna' ?>">
								<i class="fa fa-users"></i> <span>Pengguna</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'backend/bank' ?>">
								<i class="fa fa-bank"></i> <span>Bank</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url() . 'backend/product' ?>">
								<i class="fa fa-map-signs"></i> <span>Data Kostum</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
						<li >
							<a href="<?php echo base_url() . 'backend/orders' ?>">
								<i class="fa fa-bell"></i> <span>Data Sewa</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"><?php echo $jum_order; ?></small>
								</span>
							</a>
						</li>

						<li class="active">
							<a href="<?php echo base_url() . 'backend/les_tari' ?>">
								<i class="fa fa-child"></i> <span>Data Kursus Tari</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"></small>
								</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url() . 'backend/laporan' ?>">
								<i class="fa fa-file"></i> <span>Laporan</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url() . 'login/logout' ?>">
								<i class="fa fa-sign-out"></i> <span>Sign Out</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
					<?php } ?>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Data Sewa
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Data Sewa</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">

							<div class="box">
								<?php if ($this->session->userdata('akses') == '1') { ?>
									<!-- <div class="box-header">
										<a class="btn btn-success btn-flat" href="<?php echo base_url() . 'backend/orders/add_orders' ?>"><span class="fa fa-plus"></span> Add New</a>
									</div> -->
									<!-- <div class="box-header">
										<a class="btn btn-success btn-flat" data-toggle="modal" data-target="#ModalReportOrder"><span class="fa fa-file"></span> Laporan Data Order</a>
									</div> -->
								<?php } ?>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-striped" style="font-size:12px;">
										<thead>
											<tr>
												<th style="text-align:center;">Foto</th>
												<th style="text-align:center;">No Registrasi</th>
												<th style="text-align:center;">Nama</th>
												<th style="text-align:center;">Ttl</th>
												<th style="text-align:center;">Kelamin</th>
												<th style="text-align:center;">Alamat</th>
												<th style="text-align:center;">Kategori</th>
												<th style="text-align:center;">Telepon</th>
												<th style="text-align:center;">E-mail</th>
												<th style="text-align:center;">Status</th>
												<th style="text-align:center;width:100px;">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 0;
											foreach ($data->result_array() as $a) :
												$no++;
												$photo = $a['photo'];
												$no_registrasi = $a['no_registrasi'];
												$nama_lengkap = $a['nama_lengkap'];
												$tempat_tanggal_lahir = $a['tempat_tanggal_lahir'];
												$kelamin = $a['jenis_kelamin'];
												$alamat = $a['alamat'];
												$kategori = $a['kategori'];
												$no_telp = $a['no_telp'];
												$email = $a['email'];
												$status = $a['status'];
												$bukti_pembayaran = $a['bukti_pembayaran'];
												$tgl_pengembalian_user = $a['tgl_pengembalian_user'];

											?>
												<tr>
													<td style="text-align:center;"><img style="width: 50px;" src="<?php echo base_url(); ?>assets/les_tari/pas_photo/<?php echo $photo; ?>" /></td>
													<td style="text-align:center;"><?php echo $no_registrasi; ?></td>
													<td style="text-align:center;"><?php echo $nama_lengkap; ?></td>
													<td style="text-align:center;"><?php echo $tempat_tanggal_lahir; ?></td>
													<td style="text-align:center;"><?php echo $kelamin; ?></td>
													<td style="text-align:center;"><?php echo $alamat; ?></td>
													<td style="text-align:center;"><?php echo $kategori; ?></td>
													<td style="text-align:center;"><?php echo $no_telp; ?></td>
													<td style="text-align:center;"><?php echo $email; ?></td>
													<td style="text-align:center;"><?php echo $status; ?></td>
													<td>
														<?php if($status === 'dalam ulasan'){ ?>
															<a href="<?php echo base_url() . 'backend/les_tari/update_lunas/' . $no_registrasi ?> " class="btn btn-xs btn-success" title="Telah lunas"><span class="fa fa-check"></span> </a>
														<?php } ?>
														<?php if($status === 'sudah bayar'){ ?>
															<a href="<?php echo base_url() . 'backend/les_tari/update_ikut_kelas/' . $no_registrasi ?> " class="btn btn-xs btn-info" title="Ikut sertakan dalam kelas les tari"><span class="fa fa-child"></span> </a>
														<?php } ?>
														<a class="btn btn-xs btn-warning" href="#modalImgPembayaran" data-toggle="modal" title="Bukti Pembayaran"><span class="fa fa-file-image-o"></span> </a>
														<?php if($status !== 'batal'){ ?>
															<a href="<?php echo base_url() . 'backend/les_tari/batal/' . $no_registrasi ?> " class="btn btn-xs btn-danger" title="Batalkan"><span class="fa fa-close"></span> </a>
														<?php } ?>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 1.0
			</div>
			<strong>Copyright <?php date_default_timezone_set('Asia/Jakarta');
								echo date('Y'); ?> | Sanggar Seni Dwipayana Nusantara.</strong> All rights reserved.
		</footer>


		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->


<!-- MODAL BUKTI PEMBAYARAN -->

<?php
	foreach ($data->result_array() as $a) :
		$no++;
		$photo = $a['photo'];
		$no_registrasi = $a['no_registrasi'];
		$nama_lengkap = $a['nama_lengkap'];
		$tempat_tanggal_lahir = $a['tempat_tanggal_lahir'];
		$kelamin = $a['jenis_kelamin'];
		$alamat = $a['alamat'];
		$kategori = $a['kategori'];
		$no_telp = $a['no_telp'];
		$email = $a['email'];
		$status = $a['status'];
		$bukti_pembayaran = $a['bukti_pembayaran'];
		$tgl_pengembalian_user = $a['tgl_pengembalian_user'];
	?>
	<div id="modalImgPembayaran"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Pembayaran</h3>
				</div>
				<div class="modal-body">

				<div class="form-group">
					<label class="control-label col-xs-3">Atas Nama</label>
					<div class="col-xs-9">
						<input name="nama" id="atasNama" class="form-control" type="text" value="<?php echo $nama_lengkap ?>" readonly>
					</div>
				</div>

				<br />
				<br />

				<div class="form-group">
					<label class="control-label col-xs-3">No Telepon</label>
					<div class="col-xs-9">
						<input name="nama" id="atasNama" class="form-control" type="text" value="<?php echo $no_telp ?>" readonly>
					</div>
				</div>

				<br />
				<br />

				<div class="form-group">
					<label class="control-label col-xs-3">Bukti Transfer</label>
					<div class="col-xs-9">
						<input type="image" src="<?php echo base_url() . 'assets/les_tari/bukti_pembayaran/' . $bukti_pembayaran ?>" alt="Submit" width="250" height="250">
					</div>
				</div>

				</div>

					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>



	<?php
		$this->load->view('backend/v_loader_js');
	?>

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
				text: "Pembayaran Selesai",
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
	<?php elseif ($this->session->flashdata('msg') == 'success-rusak') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Success',
				text: "Berhasil Update Barang Rusak.",
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