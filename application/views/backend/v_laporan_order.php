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
	<title>Sanggar Seni Dwipayana Nusantara | Data Sewa List</title>
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
						<li class="active">
							<a href="<?php echo base_url() . 'backend/orders' ?>">
								<i class="fa fa-bell"></i> <span>Orders</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"><?php echo $jum_order; ?></small>
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
						<li>
							<a href="<?php echo base_url() . 'backend/orders' ?>">
								<i class="fa fa-bell"></i> <span>Data Sewa</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"><?php echo $jum_order; ?></small>
								</span>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url() . 'backend/les_tari' ?>">
								<i class="fa fa-child"></i> <span>Data Les Tari</span>
								<span class="pull-right-container">
									<small class="label pull-right bg-red"></small>
								</span>
							</a>
						</li>

						<li class="active">
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
					Laporan Order
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Laporan Order</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<form class="form-horizontal" target="_blank" action="<?php echo base_url() . 'backend/laporan/report_order' ?>" method="post" enctype="multipart/form-data">
								<div class="modal-body">

									<div class="form-group">
										<label class="control-label col-xs-3">Tanggal Dari</label>
										<div class="col-xs-8">
											<input name="o_tgl_dari" id="o_tgl_dari" class="form-control datepicker" type="text" required>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-xs-3">Tanggal Sampai</label>
										<div class="col-xs-8">
											<input name="o_tgl_sampai" id="o_tgl_sampai" class="form-control datepicker" type="text" required>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-xs-3">Status</label>
										<div class="col-xs-8">
											<select name="status_order" id="status_order" class="form-control" required>
												<option value="SEMUA">SEMUA</option>
												<option value="LUNAS">LUNAS</option>
												<option value="BELUM LUNAS">BELUM LUNAS</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">Sudah Dikembalikan</label>
										<div class="col-xs-8">
											<select name="is_kembali" id="is_kembali" class="form-control" required>
												<option value="SEMUA">SEMUA</option>
												<option value="1">SUDAH DIKEMBALIKAN</option>
												<option value="0">BELUM DIKEMBALIKAN</option>
											</select>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary btn-flat" id="cariLaporanPembayaran">Cari</button>
								</div>
							</form>
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

	<?php
	$this->load->view('backend/v_loader_js');
	?>
	<script>
		//Date picker
		$('.datepicker').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd'
		});
		$(function() {
			$("#example1").DataTable({
				"paging": true,
				dom: 'Bfrtip',
				buttons: ['excel', {
					extend: 'pdfHtml5',
					customize: function(doc) {
						doc.content[1].table.widths =
							Array(doc.content[1].table.body[0].length + 1).join('*').split('');
					}
				}],
			});
		});
	</script>

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