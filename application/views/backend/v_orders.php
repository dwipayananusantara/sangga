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
						<li class="active">
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
												<th style="text-align:center;width: 180px;">No Invoice</th>
												<th style="text-align:center;">Tgl Invoice</th>
												<th style="text-align:center;">Atas Nama</th>
												<th style="text-align:center;">Ambil</th>
												<th style="text-align:center;">Kembali</th>
												<th style="text-align:center;">Tanggal Pengembalian User</th>
												<th style="text-align:center;">Total Bayar</th>
												<th style="text-align:center;width:100px;">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 0;
											foreach ($data->result_array() as $a) :
												$no++;
												$id = $a['id'];
												$tgl = $a['tanggal'];
												$nama = $a['nama'];
												$ambil = $a['ambil'];
												$kembali = $a['kembali'];
												$harga_total = $a['harga_total'];
												$status = $a['status'];
												$is_kembali = $a['is_kembali'];
												$is_rusak = $a['is_rusak'];
												$bukti_transfer = $a['bukti_transfer'];
												$tgl_pengembalian_user = $a['tgl_pengembalian_user'];
												$is_notif=$a['is_notif']

											?>
												<tr>
													<td style="text-align:center;"><?php echo $id; ?></td>
													<td style="text-align:center;"><?php echo $tgl; ?></td>
													<td style="text-align:center;"><?php echo $nama; ?></td>
													<td style="text-align:center;"><?php echo $ambil; ?></td>
													<td style="text-align:center;"><?php echo $kembali; ?></td>
													<td style="text-align:center;"><?php echo $a['tgl_pengembalian_user']; ?></td>
													<td style="text-align:center;"><?php echo 'Rp ' . number_format($harga_total); ?></td>
													<td>
														<?php
														if ($status == 'LUNAS') : ?>
															<?php
															if ($is_kembali == 1) : ?>
																<label class="label label-success">LUNAS</label>
																<a class="btn btn-xs btn-info" href="<?php echo base_url() . 'backend/orders/get_deposit/' . $id ?>" data-toggle="modal" title="Cek Deposit" target="_blank"><span class="fa fa-th-list"></span> </a>
															<?php else : ?>
																<?php
																if ($tgl_pengembalian_user != '') : ?>
																	<a class="btn btn-xs btn-success" href="#modalPengembalian<?php echo $id ?>" data-toggle="modal" title="Barang Sudah Dikembalikan"><span class="fa fa-check"></span> </a>
																<?php endif ?>
																<form method="post" action="<?php echo base_url() . 'backend/mail/' ?>" enctype="multipart/form-data">
																	<input type="hidden" class="form-control" name="id_order" value="<?php echo $id ?>" /><br>
																	<button class="btn btn-xs btn-info" type="submit" name="submit" <?= $is_notif ? 'disabled' : '' ?>>Send Email</button>
																</form><br />
																<a class="btn btn-xs btn-warning" href="#modalImgPembayaran<?php echo $id ?>" data-toggle="modal" title="Bukti Pembayaran"><span class="fa fa-file-image-o"></span> </a>
																<a class="btn btn-xs btn-danger" href="#ModalHilang<?php echo $id; ?>" data-toggle="modal" title="Hilang/rusak"><span class="fa fa-chain-broken"></span> </a>
																<a class="btn btn-xs btn-danger" href="#ModalHapus<?php echo $id; ?>" data-toggle="modal" title="Batalkan"><span class="fa fa-close"></span> </a>
															<?php endif ?>
														<?php elseif ($is_rusak == 1) : ?>
															<label class="label label-warning"><b>Barang Rusak/Hilang</b></label>
														<?php else : ?>
															<?php if ($this->session->userdata('akses') != '1') { ?>
																<?php if (!$bukti_transfer) { ?>
																	<a class="btn btn-xs btn-warning" href="#modalPembayaran<?php echo $id ?>" data-toggle="modal" title="Pembayaran"><span class="fa fa-money "></span> </a>
																	<a class="btn btn-xs btn-warning" href="<?php echo base_url() . 'backend/orders/get_invoice/' . $id ?>" title="Cetak Invoice" target="_blank"><span class="fa fa-file"></span> </a>
																	<a class="btn btn-xs btn-danger" href="#ModalHapus<?php echo $id; ?>" data-toggle="modal" title="Batalkan"><span class="fa fa-close"></span> </a>
																<?php } else { ?>
																	<a class="btn btn-xs btn-warning" href="#modalImgPembayaran<?php echo $id ?>" data-toggle="modal" title="Bukti Pembayaran"><span class="fa fa-file-image-o"></span> </a>
																	<a class="btn btn-xs btn-warning" href="<?php echo base_url() . 'backend/orders/get_invoice/' . $id ?>" title="Cetak Invoice" target="_blank"><span class="fa fa-file"></span> </a>
																<?php } ?>
															<?php } else { ?>
																<?php if ($bukti_transfer != '') { ?>
																	<form method="post" action="<?php echo base_url() . 'backend/mail/' ?>" enctype="multipart/form-data">
																		<input type="hidden" class="form-control" name="id_order" value="<?php echo $id ?>" />
																		<button class="btn btn-xs btn-info" type="submit" name="submit">Send Email</button>
																	</form><br />
																	<a class="btn btn-xs btn-success" href="<?php echo base_url() . 'backend/orders/pembayaran_selesai/' . $id ?>" data-toggle="modal" title="Pembayaran Selesai"><span class="fa fa-money"></span> </a>
																	<a class="btn btn-xs btn-warning" href="#modalImgPembayaran<?php echo $id ?>" data-toggle="modal" title="Bukti Pembayaran"><span class="fa fa-file-image-o"></span> </a>
																<?php } else { ?>
																	<form method="post" action="<?php echo base_url() . 'backend/mail/' ?>" enctype="multipart/form-data">
																		<input type="hidden" class="form-control" name="id_order" value="<?php echo $id ?>" />
																		<button class="btn btn-xs btn-info" type="submit" name="submit">Send Email</button>
																	</form><br />
																<?php } ?>
																<a class="btn btn-xs btn-danger" href="#ModalHilang<?php echo $id; ?>" data-toggle="modal" title="Hilang/rusak"><span class="fa fa-chain-broken"></span> </a>
																<a class="btn btn-xs btn-danger" href="#ModalHapus<?php echo $id; ?>" data-toggle="modal" title="Batalkan"><span class="fa fa-close"></span> </a>
															<?php } ?>
														<?php endif ?>
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


	<!-- ============ MODAL Pembayaran ORDER =============== -->
	<?php
	$metode_bayar = $this->db->query("SELECT * FROM metode_bayar");
	foreach ($data->result_array() as $a) :
		$no++;
		$id = $a['id'];
		$tgl = $a['tanggal'];
		$nama = $a['nama'];
		$ambil = $a['ambil'];
		$kembali = $a['kembali'];
	?>
		<div id="modalPembayaran<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
						<h3 class="modal-title" id="myModalLabel">Pembayaran</h3>
					</div>
					<form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/orders/pembayaran_orders' ?>" enctype="multipart/form-data">
						<div class="modal-body">
							<input name="kode" type="hidden" value="<?php echo $id; ?>">

							<div class="form-group">
								<label class="control-label col-xs-3">Atas Nama</label>
								<div class="col-xs-9">
									<input name="nama" class="form-control" type="text" value="" style="width:280px;" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-3">Jumlah</label>
								<div class="col-xs-9">
									<input name="jumlah" class="form-control" type="number" value="" style="width:280px;" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-3">Metode</label>
								<div class="col-xs-9">
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
							</div>

							<div class="form-group">
								<label class="control-label col-xs-3">Gambar</label>
								<div class="col-xs-9">
									<input type="file" name="filefoto" required>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- ============ MODAL Pengembalian =============== -->
		<div id="modalPengembalian<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
						<h3 class="modal-title" id="myModalLabel">Pengembalian</h3>
					</div>
					<form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/orders/barang_kembali' ?>" enctype="multipart/form-data">
						<div class="modal-body">
							<input name="kode" type="hidden" value="<?php echo $id; ?>">

							<div class="form-group">
								<label class="control-label col-xs-3">Tanggal Pengembalian</label>
								<div class="col-xs-9">
									<input name="dikembalikan" class="form-control datepicker" type="text" value="" style="width:280px;" required>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-xs-3">Tanggal Pengembalian User</label>
								<div class="col-xs-9">
									<input name="tgl_pengembalian_user" class="form-control" type="text" value="<?php echo $a['tgl_pengembalian_user']; ?>" style="width:280px;" readonly>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
		$bukti_pembayaran = $this->db->query("SELECT * FROM pembayaran left join metode_bayar 
		on pembayaran.id_metode = metode_bayar.id_metode where id_order='$id'");
		foreach ($bukti_pembayaran->result_array() as $a) :
			$bukti_transfer = $a['bukti_transfer'];
			$pengirim = $a['pengirim'];
			$jumlah = $a['jumlah'];
			$bank = $a['bank'];
			$tgl_bayar = date("d-m-Y", strtotime($a['tgl_bayar']));
		?>
			<div id="modalImgPembayaran<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">

				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 class="modal-title" id="myModalLabel">Bukti Pembayaran</h3>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<label class="control-label col-xs-3">Atas Nama</label>
								<div class="col-xs-9">
									<input name="nama" id="atasNama" class="form-control" type="text" value="<?php echo $pengirim ?>" readonly>
								</div>
							</div>

							<br />
							<br />

							<div class="form-group">
								<label class="control-label col-xs-3">Jumlah</label>
								<div class="col-xs-9">
									<input name="jumlah" id="jumlah" class="form-control" type="number" value="<?php echo $jumlah ?>" readonly>
								</div>
							</div>

							<br />
							<br />

							<div class="form-group">
								<label class="control-label col-xs-3">Transfer Ke</label>
								<div class="col-xs-9">
									<input name="bank" id="bank" class="form-control" type="text" value="<?php echo $bank ?>" readonly>
								</div>
							</div>

							<br />
							<br />

							<div class="form-group">
								<label class="control-label col-xs-3">Tanggal Transfer</label>
								<div class="col-xs-9">
									<input name="tgl_transfer" id="tglTransfer" class="form-control" type="text" value="<?php echo $tgl_bayar ?>" readonly>
								</div>
							</div>

							<br />
							<br />

							<div class="form-group">
								<label class="control-label col-xs-3">Bukti Transfer</label>
								<div class="col-xs-9">
									<input type="image" src="<?php echo base_url() . 'assets/bukti_transfer/' . $bukti_transfer ?>" alt="Submit" width="250" height="250">
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<!--Modal Hapus Order-->
		<div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
						<h4 class="modal-title" id="myModalLabel">Hapus Order</h4>
					</div>
					<form class="form-horizontal" action="<?php echo base_url() . 'backend/orders/hapus_order' ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id; ?>" />
							<p>Apakah Anda yakin mau menghapus orderan dari <b><?php echo $nama; ?></b>?</p>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--Modal Hilang/Rusak-->
		<div class="modal fade" id="ModalHilang<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
						<h4 class="modal-title" id="myModalLabel">Barang Hilang/Rusak</h4>
					</div>
					<form class="form-horizontal" target="_blank" action="<?php echo base_url() . 'backend/orders/update_rusak' ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label class="control-label col-xs-3">Keterangan</label>
								<div class="col-xs-8">
									<input type="hidden" name="id_order" value="<?php echo $id; ?>">
									<input name="keterangan" id="keterangan" class="form-control" type="text" required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary btn-flat">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php endforeach; ?>

	<!--Modal Parameter Report Order-->
	<div class="modal fade" id="ModalReportOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
					<h4 class="modal-title" id="myModalLabel">Laporan Data Order</h4>
				</div>
				<form class="form-horizontal" target="_blank" action="<?php echo base_url() . 'backend/orders/report_order' ?>" method="post" enctype="multipart/form-data">
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
			</div>
		</div>
	</div>

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