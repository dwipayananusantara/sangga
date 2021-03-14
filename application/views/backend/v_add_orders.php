<!--Counter Inbox-->
<?php
$data_wisata = $this->db->query("SELECT * FROM wisata");

$query2 = $this->db->query("SELECT * FROM orders WHERE status <> 'LUNAS'");
$query3 = $this->db->query("SELECT * FROM testimoni WHERE status ='0'");
$query4 = $this->db->query("SELECT * FROM pembayaran");

$jum_order = $query2->num_rows();
$jum_testimoni = $query3->num_rows();
$jum_konfirmasi = $query4->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sanggar Seni Dwipayana Nusantara | Add Berita</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/all.css' ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/colorpicker/bootstrap-colorpicker.min.css' ?>">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2/select2.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">


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
						<li class="active">
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
                        <a href="<?php echo base_url() . 'backend/konfirmasi' ?>">
                            <i class="fa fa-money"></i> <span>Konfirmasi</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-red"><?php echo $jum_konfirmasi; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'backend/testimonial' ?>">
                            <i class="fa fa-comment"></i> <span>Testimonial</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-yellow"><?php echo $jum_testimoni; ?></small>
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

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Add Order
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Data Sewa</a></li>
                    <li class="active">Add Data Sewa</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-6">

                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">Wisata</h3>
                            </div>
                            <div class="box-body">

                                <textarea id="ckeditor"></textarea>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <form action="<?php echo base_url() . 'backend/orders/save_order' ?>" method="post" enctype="multipart/form-data">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Formulir Pemesanan</h3>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Jenis Wisata</label>
                                        <div class="col-xs-10">
                                            <select name="wisata" id="wisata" class="form-control" required>
                                                <option value="">-PILIH-</option>
                                                <?php foreach ($data_wisata->result_array() as $k) :
                                                    $id_wisata = $k['id_wisata'];
                                                    $nama_wisata = $k['nama_wisata'];
                                                    $deskripsi_wisata = $k['deskripsi'];
                                                    $hrg_wisata = $k['hrg_wisata'];
                                                    $hrg_makan = $k['hrg_makan'];
                                                ?>
                                                    <option value="<?php echo $id_wisata; ?>" data-harga="<?php echo $hrg_wisata; ?>" data-hargamakan="<?php echo $hrg_makan; ?>">
                                                        <?php echo $nama_wisata; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Penginapan</label>
                                        <div class="col-xs-10">
                                            <select name="penginapan" id="penginapan" class="form-control">
                                                <option value="XX">-PILIH-</option>
                                            </select>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Include Makan</label>
                                        <div class="col-xs-10">
                                            <select name="makan" id="makan" class="form-control" required>
                                                <option value="0">Tidak</option>
                                                <option value="1">Ya</option>
                                            </select>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Check IN</label>
                                        <div class="col-xs-10">
                                            <input name="keberangkatan" id="keberangkatan" class="form-control datepicker" type="text" placeholder="Check IN" required>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Check OUT</label>
                                        <div class="col-xs-10">
                                            <input name="kembali" id="kembali" class="form-control datepicker" type="text" placeholder="Check OUT" required>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Jumlah Orang</label>
                                        <div class="col-xs-10">
                                            <input name="jumlah_orang" id="jumlah_orang" class="form-control" type="number" placeholder="Jumlah Orang" required>
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <label class="control-label col-xs-2">Total Harga</label>
                                        <div class="col-xs-8">
                                            <input id="total_harga" class="form-control" type="number" value="0" readonly>
                                        </div>
                                        <div class="col-xs-2">
                                            <input id="cek_harga" class="form-control" type="button" value="Cek Harga">
                                        </div>
                                    </div>
                                    <!-- /.form group -->
                                    </br>
                                    </br>
                                    <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-upload"></span> Post</button>
                                </div>
                                <!-- /.box -->
                        </form>

                        <!-- /.box -->
                    </div>
                    <!-- /.col (right) -->
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
            <strong>Copyright <?php date_default_timezone_set('Asia/Jakarta'); echo date('Y');?> | Sanggar Seni Dwipayana Nusantara.</strong> All rights reserved.
        </footer>


        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php
    $this->load->view('backend/v_loader_js');
    ?>
    <script type="text/javascript">
        $(function() {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('ckeditor');
        });
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $(".select2").select2();
            $('#cek_harga').click(function() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . 'backend/orders/cek_harga' ?>",
                    dataType: "json",
                    data: {
                        wisata: $('#wisata').val(),
                        penginapan: $('#penginapan').val(),
                        makan: $('#makan').val(),
                        keberangkatan: $('#keberangkatan').val(),
                        kembali: $('#kembali').val(),
                        jumlah_orang: $('#jumlah_orang').val(),
                    },
                    success: function(data) {
                        $('#total_harga').val(data);
                    }

                });
            });
            $('#wisata').change(function() {
                // $('#total_harga').val(0);
                /* if ($('#makan').val() == '0') {
                    $('#total_harga').val($('option:selected', this).data("harga"));
                } else {
                    $('#total_harga').val(parseInt($('option:selected', this).data("harga")) + parseInt($('option:selected', this).data("hargamakan")));
                } */
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . 'backend/orders/get_data_wisata' ?>",
                    dataType: "json",
                    data: {
                        wisata: $('#wisata').val()
                    },
                    success: function(data) {
                        CKEDITOR.instances['ckeditor'].setData(data[0].deskripsi);
                        CKEDITOR.instances['ckeditor'].setReadOnly(true);
                        // $('#ckeditor').html(data[0].deskripsi);
                    }

                });
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url() . 'backend/orders/get_data_penginapan' ?>",
                    dataType: "json",
                    data: {
                        wisata: $('#wisata').val()
                    },
                    success: function(data) {
                        if (data.length == 0) {
                            $.toast({
                                heading: 'Error',
                                text: "Data Penginapan Tidak Ada.",
                                showHideTransition: 'slide',
                                icon: 'error',
                                hideAfter: false,
                                position: 'bottom-right',
                                bgColor: '#FF4859'
                            });
                            return false;
                        }

                        $('#penginapan').html('<option value="XX">-PILIH-</option>');
                        for (var i = 0; i < data.length; i++) {
                            $("#penginapan").append($('<option></option>').val(data[i].idhotel).data("harga", data[i].hrg_hotel).html(data[i].nama_hotel /* + " - harga (" + data[i].hrg_hotel + ")" */ ));
                        };
                    }

                });
            });

            //Datemask dd/mm/yyyy
            //Date picker
            $('.datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            //Colorpicker
            $(".my-colorpicker1").colorpicker();
            //color picker with addon
            $(".my-colorpicker2").colorpicker();

            //Timepicker
            $(".timepicker").timepicker({
                showInputs: false
            });
        });
    </script>
</body>

</html>