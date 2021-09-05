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
	<title>Sanggar Seni Dwipayana Nusantara | Daftar Kostum</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

	<?php
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

	<style>
		body {
			color: #404E67;
			background: #F5F7FA;
			font-family: 'Open Sans', sans-serif;
		}

		.table-wrapper {
			width: 700px;
			margin: 30px auto;
			background: #fff;
			padding: 20px;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		}

		.table-title {
			padding-bottom: 10px;
			margin: 0 0 10px;
		}

		.table-title h2 {
			margin: 6px 0 0;
			font-size: 22px;
		}

		.table-title .add-new {
			float: right;
			height: 30px;
			font-weight: bold;
			font-size: 12px;
			text-shadow: none;
			min-width: 100px;
			border-radius: 50px;
			line-height: 13px;
		}

		.table-title .add-new i {
			margin-right: 4px;
		}

		.table-title .upd-add-new {
			float: right;
			height: 30px;
			font-weight: bold;
			font-size: 12px;
			text-shadow: none;
			min-width: 100px;
			border-radius: 50px;
			line-height: 13px;
		}

		.table-title .upd-add-new i {
			margin-right: 4px;
		}

		table.table {
			table-layout: fixed;
		}

		table.table tr th,
		table.table tr td {
			border-color: #e9e9e9;
		}

		table.table th i {
			font-size: 13px;
			margin: 0 5px;
			cursor: pointer;
		}

		table.table th:last-child {
			width: 100px;
		}

		table.table td a {
			cursor: pointer;
			display: inline-block;
			margin: 0 5px;
			min-width: 24px;
		}

		table.table td a.add {
			color: #27C46B;
		}

		table.table td a.edit {
			color: #FFC107;
		}

		table.table td a.delete {
			color: #E34724;
		}

		table.table td i {
			font-size: 19px;
		}

		table.table td a.add i {
			font-size: 24px;
			margin-right: -1px;
			position: relative;
			top: 3px;
		}

		table.table .form-control {
			height: 32px;
			line-height: 32px;
			box-shadow: none;
			border-radius: 2px;
		}

		table.table .form-control.error {
			border-color: #f50000;
		}

		table.table td .add {
			display: none;
		}
	</style>

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
							<a href="<?php echo base_url() . 'backend/pengguna' ?>">
								<i class="fa fa-users"></i> <span>Pengguna</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
						<li>
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
					Data Kostum
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Data kostum</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">

							<div class="box">
								<div class="box-header">
									<a class="btn btn-success btn-flat" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Add New</a>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-striped" style="font-size:13px;">
										<thead>
											<tr>
												<th>Gambar</th>
												<th>Kostum</th>
												<th>Harga Produk</th>
												<th style="text-align:right;">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 0;
											foreach ($data->result_array() as $a) :
												$no++;
												$gambar = $a['gambar'];
												$id = $a['id_product'];
												$nama_product = $a['nama_product'];
												$harga_product = $a['harga_product'];
												// $deskripsi = $a['deskripsi'];
											?>
												<tr>
													<td><img src="<?php echo base_url() . 'front/images/baju/' . $gambar; ?>" style="width:90px;"></td>
													<td><?php echo $nama_product; ?></td>
													<td><?php echo $harga_product; ?></td>
													<!-- <td><?php //echo $deskripsi; ?></td> -->
													<td style="text-align:right;">
														<a class="btn" data-toggle="modal" data-target="#ModalUpdate<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
														<a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
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

	<?php
	error_reporting(0);
	$provinsi = $this->db->query("select * from provinsi where is_delete = 0");
	$jenis_product = $this->db->query("select * from jenis_product where is_delete = 0");
	?>

	<!-- ============ MODAL ADD PRODUCT =============== -->
	<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Kostum</h3>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/product/simpan_product' ?>" enctype="multipart/form-data">
					<div class="modal-body">

						<div class="form-group">
							<label class="control-label col-xs-2">Nama Kostum</label>
							<div class="col-xs-8">
								<input name="nama_product" class="form-control" type="text" placeholder="Product..." required>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2">Deskripsi</label>
							<div class="col-xs-8">
								<textarea class="ckeditor" name="deskripsi" rows="10" cols="10"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2">Provinsi</label>
							<div class="col-xs-8">
								<select name="provinsi" id="provinsi">
									<?php foreach ($provinsi->result_array() as $k) :
									?>
										<option value="<?php echo $k['id_provinsi']; ?>"><?php echo $k['nama_provinsi']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2">Gender</label>
							<div class="col-xs-8">
								<select name="gender" id="gender">
									<option value="L">Laki-laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2">Jenis Kostum</label>
							<div class="col-xs-8">
								<select name="id_jenis_product" id="id_jenis_product">
									<?php foreach ($jenis_product->result_array() as $k) :
									?>
										<option value="<?php echo $k['id_jenis_product']; ?>"><?php echo $k['nama_jenis_product']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2">Harga Kostum</label>
							<div class="col-xs-8">
								<input name="harga_product" class="form-control" type="number" placeholder="Harga Product" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2">Stock Size S</label>
							<div class="col-xs-8">
								<input name="s" class="form-control" type="number" placeholder="Stock Size S" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2">Stock Size M</label>
							<div class="col-xs-8">
								<input name="m" class="form-control" type="number" placeholder="Stock Size M" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2">Stock Size L</label>
							<div class="col-xs-8">
								<input name="l" class="form-control" type="number" placeholder="Stock Size L" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-2">Stock Size XL</label>
							<div class="col-xs-8">
								<input name="xl" class="form-control" type="number" placeholder="Stock Size XL" required>
							</div>
						</div>

						<div class="table-responsive">
							<div class="table-wrapper">
								<div class="table-title">
									<div class="row">
										<div class="col-sm-8">
											<h2>Tambah Detail Kostum</h2>
										</div>
										<div class="col-sm-4">
											<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
										</div>
									</div>
								</div>
								<table id="table-dtl-product" class="table-bordered">
									<thead>
										<tr>
											<th>Kode Detail Kostum</th>
											<th>Nama Detail Kostum</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-xs-2">Gambar</label>
							<div class="col-xs-8">
								<input type="file" name="filefoto" required>
							</div>
						</div>

					</div>

					<div class="modal-footer">
						<button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-primary btn-flat">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
	$no = 0;
	foreach ($data->result_array() as $a) :
		$no++;
		$id = $a['id_product'];
		// $gambar = $a['gambar'];
		$deskripsi = $a['deskripsi'];
		$nama_product = $a['nama_product'];
		$harga_product = $a['harga_product'];
		$harga_deposit = $a['harga_deposit'];
	?>
		<!-- ============ MODAL EDIT PRODUCT =============== -->
		<div class="modal fade" id="ModalUpdate<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
						<h3 class="modal-title" id="myModalLabel">Update Kostum</h3>
					</div>
					<form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/product/update_product' ?>" enctype="multipart/form-data">
						<div class="modal-body">

							<div class="form-group">
								<label class="control-label col-xs-2">Kostum</label>
								<div class="col-xs-8">
									<input name="nama_product" value="<?php echo $a['nama_product']; ?>" class="form-control" type="text" placeholder="Product..." required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-2">Deskripsi</label>
								<div class="col-xs-8">
									<textarea class="ckeditor" name="deskripsi" rows="10" cols="10"><?php echo $a['deskripsi']; ?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-2">Provinsi</label>
								<div class="col-xs-8">
									<select name="provinsi" id="provinsi">
										<?php foreach ($provinsi->result_array() as $k) :
										?>
											<option value="<?php echo $k['id_provinsi']; ?>" <?php echo ($a['id_provinsi'] ==  $k['id_provinsi']) ? 'selected' : null; ?>><?php echo $k['nama_provinsi']; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-2">Gender</label>
								<div class="col-xs-8">
									<select name="gender" id="gender">
										<option value="L" <?php echo ($a['gender'] ==  'L') ? null : 'selected'; ?>>Laki-laki</option>
										<option value="P" <?php echo ($a['gender'] ==  'P') ? null : 'selected'; ?>>Perempuan</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-2">Jenis Kostum</label>
								<div class="col-xs-8">
									<select name="id_jenis_product" id="id_jenis_product">
										<?php foreach ($jenis_product->result_array() as $k) :
										?>
											<option value="<?php echo $k['id_jenis_product']; ?>" <?php echo ($a['id_jenis_product'] ==  $k['id_jenis_product']) ? 'selected' : null; ?>><?php echo $k['nama_jenis_product']; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-2">Harga Kostum</label>
								<div class="col-xs-8">
									<input name="harga_product" class="form-control" type="number" placeholder="Harga Product" value="<?php echo $a['harga_product']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2">Stock Size S</label>
								<div class="col-xs-8">
									<input name="s" class="form-control" type="number" placeholder="Stock Size S" value="<?php echo $a['s']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2">Stock Size M</label>
								<div class="col-xs-8">
									<input name="m" class="form-control" type="number" placeholder="Stock Size M" value="<?php echo $a['m']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2">Stock Size L</label>
								<div class="col-xs-8">
									<input name="l" class="form-control" type="number" placeholder="Stock Size L" value="<?php echo $a['l']; ?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-2">Stock Size XL</label>
								<div class="col-xs-8">
									<input name="xl" class="form-control" type="number" placeholder="Stock Size XL" value="<?php echo $a['xl']; ?>" required>
								</div>
							</div>

							<div class="table-responsive">
								<div class="table-wrapper">
									<div class="table-title">
										<div class="row">
											<div class="col-sm-8">
												<h2>Tambah Detail Kostum</h2>
											</div>
											<div class="col-sm-4">
												<button type="button" class="btn btn-info upd-add-new"><i class="fa fa-plus"></i> Add New</button>
											</div>
										</div>
									</div>
									<table id="upd-table-dtl-product" class="table-bordered">
										<thead>
											<tr>
												<th>Kode Detail Kostum</th>
												<th>Nama Detail Kostum</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody>
											<?php
											foreach ($detail->result_array() as $b) :
												$kode_detail_product = $b['kode_detail_product'];
												$nama_detail_product = $b['nama_detail_product'];
												if ($b['id_product'] == $id) :

											?>
													<tr>
														<td><select name="kode_detail_product[]">
																<option value="AKSESORIS" <?php echo ($kode_detail_product == 'AKSESORIS') ? 'selected' : ''; ?>>Aksesoris</option>
																<option value="KELENGKAPAN" <?php echo ($kode_detail_product == 'KELENGKAPAN') ? 'selected' : ''; ?>>Kelengkapan</option>
															</select></td>
														<td><input type="text" class="form-control" name="nama_detail_product[]" id="nama_detail_product" value="<?php echo $nama_detail_product; ?>"></td>
														<td>
															<a class="delete-dtl-product"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
											<?php endif;
											endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-2">Gambar</label>
								<div class="col-xs-8">
									<input type="file" name="filefoto">
								</div>
							</div>

						</div>

						<div class="modal-footer">
							<input type="hidden" name="kode" value="<?php echo $id; ?>">
							<button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-primary btn-flat">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php endforeach; ?>

	<?php
	$no = 0;
	foreach ($data->result_array() as $a) :
		$no++;
		$id = $a['id_product'];
		// $gambar = $a['gambar'];
		$nama_product = $a['nama_product'];
	?>
		<!--Modal Hapus Post-->
		<div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
						<h4 class="modal-title" id="myModalLabel">Hapus Kostum</h4>
					</div>
					<form class="form-horizontal" action="<?php echo base_url() . 'backend/product/hapus_product' ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id; ?>" />
							<p>Apakah Anda yakin mau menghapus kostum <b><?php echo $nama_product; ?></b> ?</p>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<?php
	$this->load->view('backend/v_loader_js');
	?>
	<script>
		$(".select2").select2();
		// Append table with add row form on add new button click
		$(".add-new").click(function() {
			var index = $("#table-dtl-product tbody tr:last-child").index();
			var row = '<tr>' +
				'<td><select name="kode_detail_product[]">' +
				'<option value="AKSESORIS">Aksesoris</option>' +
				'<option value="KELENGKAPAN">Kelengkapan</option>' +
				'</select></td>' +
				'<td><input type="text" class="form-control" name="nama_detail_product[]" id="nama_detail_product"></td>' +
				'<td>' +
				'<a class="delete-dtl-product"><i class="fa fa-trash"></i></a>' +
				'</td>' +
				'</tr>';
			$("#table-dtl-product").append(row);
		});
		// Add row on add button click
		$(document).on("click", ".add-dtl-product", function() {
			var empty = false;
			var input = $(this).parents("tr").find('input[type="text"]');
		});
		// Delete row on delete button click
		$(document).on("click", ".delete-dtl-product", function() {
			$(this).parents("tr").remove();
		});

		$(".upd-add-new").click(function() {
			var index = $("#upd-table-dtl-product tbody tr:last-child").index();
			var row = '<tr>' +
				'<td><select name="kode_detail_product[]">' +
				'<option value="AKSESORIS">Aksesoris</option>' +
				'<option value="KELENGKAPAN">Kelengkapan</option>' +
				'</select></td>' +
				'<td><input type="text" class="form-control" name="nama_detail_product[]" id="nama_detail_product"></td>' +
				'<td>' +
				'<a class="delete-dtl-product"><i class="fa fa-trash"></i></a>' +
				'</td>' +
				'</tr>';
			$("#upd-table-dtl-product").append(row);
		});
		// Add row on add button click
		$(document).on("click", ".add-dtl-product", function() {
			var empty = false;
			var input = $(this).parents("tr").find('input[type="text"]');
		});
		// Delete row on delete button click
		$(document).on("click", ".delete-dtl-product", function() {
			$(this).parents("tr").remove();
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
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
			CKEDITOR.replace('ckeditor');
		});
	</script>

	<?php if ($this->session->flashdata('msg') == 'success') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Success',
				text: "Data Kostum Berhasil disimpan ke database.",
				showHideTransition: 'slide',
				icon: 'success',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#7EC857'
			});
		</script>
	<?php elseif ($this->session->flashdata('msg') == 'info') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Info',
				text: "Data Kostum berhasil di update",
				showHideTransition: 'slide',
				icon: 'info',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#00C9E6'
			});
		</script>
	<?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
		<script type="text/javascript">
			$.toast({
				heading: 'Success',
				text: "Data Kostum Berhasil dihapus.",
				showHideTransition: 'slide',
				icon: 'success',
				hideAfter: false,
				position: 'bottom-right',
				bgColor: '#7EC857'
			});
		</script>
	<?php else : ?>

	<?php endif; ?>
</body>

</html>