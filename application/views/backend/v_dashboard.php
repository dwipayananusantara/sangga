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
	<title>Sanggar Seni Dwipayana Nusantara | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
	<!-- Ionicons -->
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
	<?php
	/* Mengambil query report*/
	foreach ($visitor as $result) {
		$bulan[] = $result->tgl; //ambil bulan
		$value[] = (float) $result->jumlah; //ambil nilai
	}
	/* end mengambil query*/

	?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<!--Header-->
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
							<a href="<?php echo base_url() . 'login/logout' ?>">
								<i class="fa fa-sign-out"></i> <span>Sign Out</span>
								<span class="pull-right-container">
									<small class="label pull-right"></small>
								</span>
							</a>
						</li>
					<?php } else { ?>
						<li class="active">
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
					Dashboard
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- Info boxes -->
				<div class="row">
					<div class="col-md-6 col-sm-8 col-xs-12">
						<div class="form-group">
							<div class="col-md-4">
								<input name="dari" id="tgl_dari" class="form-control datepicker" type="text" placeholder="Tanggl Dari" required>
							</div>
							<div class="col-md-4">
								<input name="sampai" id="tgl_sampai" class="form-control datepicker" type="text" placeholder="Tanggal Sampai" required>
							</div>
							<div class="col-md-2">
								<input id="cari" class="form-control" type="button" value="Cari">
							</div>
							<div class="col-md-2">
							<!-- <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'backend/dashboard/report_bank' ?>" target="_blank"><span class="fa fa-file"></span> Cetak</a> -->
								<!-- <button onClick="cetakDashboard()" class="form-control">Cetak</button> -->
							</div>
							<!-- <div class="col-md-2">
								<button onClick="printPdf()" class="form-control">PDF</button>
							</div> -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>
				<br />
				<!-- /.row -->

				<!-- Main row -->
				<div class="row">
					<!-- Left col -->
					<div class="col-md-10">
						<!-- MAP & BOX PANE -->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">5 Kostum Terpopuler</h3>

								<table id="wisata" class="table tableWisata">
									<?php
									$query = $this->db->query("select product.id_product, nama_product, COUNT(product.id_product) as jumlah_sewa
									from product
									left join orders
									on product.id_product = orders.id_product
									where status = 'LUNAS'
									group by product.id_product
									order by COUNT(product.id_product) desc
									limit 5");
									foreach ($query->result_array() as $i) :
										$id_product = $i['id_product'];
										$nama_product = $i['nama_product'];
										$jumlah_sewa = $i['jumlah_sewa'];
									?>
										<tr>
											<td class="tdName"><?php echo $nama_product; ?></td>
											<td class="tdValue"><?php echo $jumlah_sewa . ' Penyewa'; ?></td>
										</tr>
									<?php endforeach; ?>
								</table>
							</div>

							<!-- /.box-body -->
						</div>
						<!-- /.box -->

						<!-- /.box -->
					</div>
					<!-- /.col -->
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Bar Chart</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								<div class="chart">
									<canvas id="barChart" style="height:230px"></canvas>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<?php
						$query = $this->db->query("select 
						coalesce(count(case when status = 'BELUM LUNAS' then orders.id_order end), 0) as count_belum_lunas,
						coalesce(count(case when status = 'LUNAS' then orders.id_order end), 0) as count_lunas,
						coalesce(sum(case when status = 'LUNAS' then
						((ceiling((kembali - ambil+1) / 3) * harga_product) +
						(ceiling((kembali - ambil+1) / 3) * harga_deposit)) * quantity end),0) as total_lunas,
						coalesce(count(case when is_kembali = 0 then 1 end), 0) as count_belum_dikembalikan
						from orders
						left join
						pembayaran
						on pembayaran.id_order = orders.id_order
						left join product on
						orders.id_product = product.id_product");
						foreach ($query->result_array() as $i) :
							$count_belum_lunas = $i['count_belum_lunas'];
							$count_lunas = $i['count_lunas'];
							$count = $i['count_lunas'] + $i['count_belum_lunas'];
							$total_lunas = $i['total_lunas'];
							$count_belum_dikembalikan = $i['count_belum_dikembalikan'];
						?>
							<!-- Info Boxes Style 2 -->
							<div class="info-box bg-yellow">
								<span class="info-box-icon"><i class="fa fa-money"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Pendapatan</span>
									<span id="pendapatan" class="info-box-number">Rp. <?php echo number_format($total_lunas, 0); ?></span>

									<div class="progress">
										<div class="progress-bar" style="width: 100%"></div>
									</div>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
							<div class="info-box bg-aqua">
								<span class="info-box-icon"><i class="fa fa-users"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Jumlah Order</span>
									<span id="totalOrder" class="info-box-number"><?php echo $count; ?></span>

									<div class="progress">
										<div class="progress-bar" style="width: 100%"></div>
									</div>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->
							<div class="info-box bg-green">
								<span class="info-box-icon"><i class="fa fa-users"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Sudah LUNAS</span>
									<span id="lunas" class="info-box-number"><?php echo $count_lunas; ?></span>

									<div class="progress">
										<div class="progress-bar" style="width: 100%"></div>
									</div>
								</div>
								<!-- /.info-box-content -->
							</div>

							<div class="info-box bg-red">
								<span class="info-box-icon"><i class="fa fa-users"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Belum LUNAS</span>
									<span id="blmLunas" class="info-box-number"><?php echo $count_belum_lunas; ?></span>

									<div class="progress">
										<div class="progress-bar" style="width: 100%"></div>
									</div>
								</div>
								<!-- /.info-box-content -->
							</div>
							
							<div class="info-box bg-black">
								<span class="info-box-icon"><i class="fa fa-users"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">Belum Dikembalikan</span>
									<span id="blmLunas" class="info-box-number"><?php echo $count_belum_dikembalikan; ?></span>

									<div class="progress">
										<div class="progress-bar" style="width: 100%"></div>
									</div>
								</div>
								<!-- /.info-box-content -->
							</div>
							<!-- /.info-box -->

							<!-- PRODUCT LIST -->
						<?php endforeach; ?>
					
					</div>
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

		$('#cari').click(function() {
			if($('#tgl_dari').val() == '' || $('#tgl_sampai').val() == ''){
				alert('Tanggal Dari Atau Tanggal Sampai Harus diisi');
				return false;
			}
			$.ajax({
				type: "POST",
				url: "<?php echo base_url() . 'backend/dashboard/data_dashboard' ?>",
				dataType: "json",
				data: {
					tgl_dari: $('#tgl_dari').val(),
					tgl_sampai: $('#tgl_sampai').val()
				},
				success: function(data) {
					$('#pendapatan').html('Rp. ' + new Intl.NumberFormat().format(data[0].total_lunas));
					$('#totalOrder').html(parseInt(data[0].count_lunas) + parseInt(data[0].count_belum_lunas));
					$('#lunas').html(parseInt(data[0].count_lunas));
					$('#blmLunas').html(parseInt(data[0].count_belum_lunas));
				}

			});
			$.ajax({
				type: "POST",
				url: "<?php echo base_url() . 'backend/dashboard/data_dashboard_product' ?>",
				dataType: "json",
				data: {
					tgl_dari: $('#tgl_dari').val(),
					tgl_sampai: $('#tgl_sampai').val()
				},
				success: function(data) {
					$('#wisata').empty(); // or
					// $('#wisata').html(''); // use this, any one of the two
					$.each(data, function(i, item) {
						$('<tr>').html("<td class='tdName'>" + data[i].nama_product + "</td><td class='tdValue'>" + data[i].jumlah_sewa + ' Penyewa' + "</td>").appendTo('#wisata');
					});
				}

			});
		});

		function cetakDashboard() {
			if($('#tgl_dari').val() == '' || $('#tgl_sampai').val() == ''){
				alert('Tanggal Dari Atau Tanggal Sampai Harus diisi');
				return false;
			}
			var tanggalDari = $('#tgl_dari').val();
			var tanggalSampai = $('#tgl_sampai').val();
			if (tanggalDari == '') {
				tanggalDari = 'ALL';
			}
			if (tanggalSampai == '') {
				tanggalSampai = 'ALL';
			}
			window.open('<?php echo base_url() . 'backend/dashboard/report_dashboard' ?>'+'/'+tanggalDari+'/'+tanggalSampai);
		}

		function printPdf() {
			var ary = [],
				namaWisata = [],
				valueWisata = [],
				ii = 0;
			var tanggalDari = $('#tgl_dari').val();
			var tanggalSampai = $('#tgl_sampai').val();
			$(function() {
				$('#wisata tr').each(function(a, b) {
					var name = $('.tdName', b).text();
					var value = $('.tdValue', b).text();
					namaWisata.push({
						text: name,
						alignment: 'center'
					});
					valueWisata.push({
						text: value,
						alignment: 'center'
					});

				});
			});
			if (tanggalDari == '') {
				tanggalDari = 'ALL';
			}
			if (tanggalSampai == '') {
				tanggalSampai = 'ALL';
			}

			var docDefinition = {
				content: [{
						text: 'Dashboard',
						style: 'header',
						alignment: 'center'
					},
					{
						text: 'Tanggal Dari :' + tanggalDari + ' Tanggal Sampai :' + tanggalSampai + '\n\n',
						style: 'subheader'
					},
					{
						style: 'table',
						table: {
							widths: ['*', '*'],
							body: [
								[{
										style: 'tableHeader',
										alignment: 'center',
										text: 'Wisata'
									},
									{
										style: 'tableHeader',
										alignment: 'center',
										text: 'Pengunjung'
									}
								],
								[namaWisata, valueWisata]
							]
						}
					},
					{
						text: '\n\n',
					},
					{
						style: 'table',
						table: {
							widths: ['*', '*'],
							body: [
								[{
									alignment: 'center',
									text: 'PENDAPATAN'
								}, {
									alignment: 'center',
									text: $('#pendapatan').html()
								}],
								[{
									alignment: 'center',
									text: 'JUMLAH ORDER'
								}, {
									alignment: 'center',
									text: $('#totalOrder').html()
								}],
								[{
									alignment: 'center',
									text: 'SUDAH LUNAS'
								}, {
									alignment: 'center',
									text: $('#lunas').html()
								}],
								[{
									alignment: 'center',
									text: 'BELUM LUNAS'
								}, {
									alignment: 'center',
									text: $('#blmLunas').html()
								}]
							]
						},
						layout: 'noBorders'
					},
				]
			};

			var pdf = createPdf(docDefinition);
			pdf.download('Dashboard.pdf');
		}
	</script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/chart.js/Chart.js"></script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : 'rgba(210, 214, 222, 1)',
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label               : 'Digital Goods',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>

</body>

</html>