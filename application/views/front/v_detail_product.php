<?php
include('format_rupiah.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>

<body>

    <!-- Start Switcher -->
    <!-- <?php include('colorswitcher.php'); ?> -->
    <!-- /Switcher -->

    <!--Header-->
    <?php include('header.php'); ?>
    <!-- /Header -->

    <?php
    $result = $get_product->row_array();
    ?>
    <!--Listing-Image-Slider-->
    <p style="text-align:center;"><img src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities($result['gambar']); ?>" width="500"/></p>
    <!-- <section id="listing_img_slider"> -->
        <!-- <p style="text-align:center;"><img src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities($result['gambar']); ?>" class="img-responsive"></p> -->
    <!-- </section> -->
    <!--/Listing-Image-Slider-->


    <!--Listing-detail-->
    <section class="listing-detail">
        <div class="container">
            <div class="listing_detail_head row">
                <div class="col-md-8">
                    <h2><?php echo $result['nama_product'] . ' ' . $result['nama_gender'] . ' ' . $result['nama_provinsi']; ?></h2>
                </div>
                <div class="col-md-4">
                    <p><h5><b>Harga Sewa Kostum <?php echo htmlentities(format_rupiah($result['harga_product'])); ?> / 3 Hari </b></h5></p>
                    <p><h5><b>Harga Deposit <?php echo htmlentities(format_rupiah($result['harga_deposit'])); ?> / 3 Hari </b></h5></p>
                    <!-- <div class="price_info">
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="main_features">
                    </div>
                    <div class="listing_more_info">
                        <div class="listing_detail_wrap">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs gray-bg" role="tablist">
                                <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Deskripisi Kostum</a></li>
                                <!-- <li role="presentation"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Deskripisi Baju</a></li> -->
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- vehicle-overview -->
                                <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                                    <p><?php echo $result['deskripsi']; ?></p>
                                    <p>KELENGKAPAN: <?php
                                                    $nama_kelengkapan = '';
                                                    foreach ($kelengkapan_product->result_array() as $i) {
                                                        $nama_kelengkapan .= $i['nama_detail_product'] . ', ';

                                                    ?>
                                        <?php
                                                    }
                                        ?>
                                        <?php echo $nama_kelengkapan; ?></p>
                                    <p>AKSESORIS: <?php
                                                    $nama_aksesoris = '';
                                                    foreach ($aksesoris_product->result_array() as $i) {
                                                        $nama_aksesoris .= $i['nama_detail_product'] . ', ';

                                                    ?>
                                            <?php
                                                    }
                                            ?><?php echo $nama_aksesoris; ?></p>
                                    <p>Stock S : <?php echo $result['s']; ?></p>
                                    <p>Stock M : <?php echo $result['m']; ?></p>
                                    <p>Stock L : <?php echo $result['l']; ?></p>
                                    <p>Stock XL : <?php echo $result['xl']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-4">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Sewa Sekarang</h5>
                        </div>
                        <?php if ($this->session->userdata('akses') == null) { ?>
                            <div class="user_profile_info">
                                <div class="col-md-12 col-sm-10">
                                    <div class="form-group">
                                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'login' ?>">
                                            <input type="hidden" class="form-control" name="ref" value="<?php echo base_url(uri_string()) ?>" />
                                            <div class="box-header">
                                                <input type="submit" class="btn btn-xs uppercase" value="Login Untuk Menyewa" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="id" value=<?php echo $id; ?>>
                        <?php } else { ?>
                            <form id="data" method="post">
                                <div class="user_profile_info">
                                    <div class="col-md-12 col-sm-10">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>Tanggal Sewa</label>
                                            <input type="date" class="form-control " name="ambil" required>
                                            <input type="hidden" name="now" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pengembalian</label>
                                            <input type="date" class="form-control" name="kembali">
                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran</label>
                                            <select class="form-control" name="ukuran" id="ukuran">
                                                <?php if($result['s'] > 0){  ?>
                                                   <option value="s">S</option>
                                                <?php } ?>
                                                <?php if($result['m'] > 0){  ?>
                                                <option value="m">M</option>
                                                <?php } ?>
                                                <?php if($result['l'] > 0){  ?>
                                                <option value="l">L</option>
                                                <?php } ?>
                                                <?php if($result['xl'] > 0){  ?>
                                                <option value="xl">XL</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" name="quantity" id='quantity' required>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pengantaran" id="exampleRadios1" value="ambil_sendiri" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Ambil Sendiri
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pengantaran" id="exampleRadios2" value="gojek">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Diantar Gojek
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio" name="pengantaran" id="exampleRadios3" value="grab">
                                            <label class="form-check-label" for="exampleRadios3">
                                                Diantar Grab
                                            </label>
                                        </div>
                                        <small id="notes" class="form-text text-muted">Jika diantar biaya pengiriman ditanggung oleh penyewa</small>
                                        <div class="form-group">
                                            <label>Total Harga</label>
                                            <input id="total_harga" class="form-control" type="text" value="0" readonly>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <input type="button" id="cek_harga" name="cek_harga" value="Cek Harga" class="btn btn-block"><br />
                                            <div class="form-group" align="center">
                                                <input type="button" name="submit" id="submit" value="Sewa Sekarang" class="btn btn-block" disabled />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input name="id_product" type="hidden" class="form-control" id="id_product" value="<?php echo $result['id_product']; ?>">
                            </form>
                        <?php } ?>
                    </div>
                </aside>
                <!--/Side-Bar-->
            </div>

        </div>
    </section>
    <!--/Listing-detail-->

    <?php include "footer.php"; ?>
    <?php include "loader.php"; ?>

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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                startDate: "<?php echo date('Y-m-d'); ?>",
                autoclose: true,
                format: 'yyyy-mm-dd',
                uiLibrary: 'bootstrap'
            });
        });
        $(function() {
            $('#submit').click(function() {
                if (new Date($('#ambil').val()) > new Date($('#kembali').val())) {
                    alert('Tanggal Ambil Tidak Boleh Kurang Dari Kembali');
                    return true;
                }
                $.ajax({
                    url: '<?php echo base_url() . 'backend/orders/save_order' ?>',
                    type: 'POST',
                    data: $('#data').serialize(),
                    success: function(response) {
                        // $.ajax({
                        //     url: '<?php echo base_url() . 'backend/orders/kurangi_stock' ?>',
                        //     type: 'POST',
                        //     data: $('#data').serialize(),
                        // });
                        if (response != '') {
                            alert('Order Berhasil Di Pesan Dengan No Invoice ' + response.replace(/\"/g, ""));
                            window.open("<?php echo base_url() . 'backend/orders/get_invoice/' ?>" + response.replace(/\"/g, ""), '_blank');
                            window.location.replace("<?php echo base_url() . 'riwayatsewa' ?>");
                        }
                    }
                });
            });

            $('#cek_harga').click(function() {
                var ambil = new Date($('#ambil').val())
                var kembali = new Date($('#kembali').val())
                
                // if(!$('#ambil').val() || !$('#kembali').val()) {
                //     Swal.fire({
                //         title: 'WARNING',
                //         text: "Tanggal tidak boleh kosong",
                //         icon: 'warning',
                //         confirmButtonColor: 'blue',
                //         confirmButtonText: 'Ok'
                //     })
                // }

                if (ambil > kembali) {
                    Swal.fire({
                        title: 'WARNING',
                        text: "Tanggal Ambil Tidak Boleh Kurang Dari Kembali",
                        icon: 'warning',
                        confirmButtonColor: 'blue',
                        confirmButtonText: 'Ok'
                    })
                    return true;
                }

                async function createCookie(name, value, days) {
                    var expires;
                    
                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toGMTString();
                    }
                    else {
                        expires = "";
                    }
                    console.log(name)
                    document.cookie = escape(name) + "=" + 
                        escape(value) + expires + "; path=/";
                }

                var ukuran = $('#ukuran').val()
                var quantity = $('#quantity').val()

                    createCookie("ukuran", ukuran, "10").then(() => {

                        if( quantity > (<?= $result[$_COOKIE['ukuran']] ?> || 0) ){
                        Swal.fire({
                            title: 'WARNING',
                            text: "Pemesanan anda melebihi stock kami",
                            icon: 'warning',
                            confirmButtonColor: 'blue',
                            confirmButtonText: 'Ok'
                        })
                        return true;
                    }

                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url() . 'backend/orders/cek_harga' ?>",
                        dataType: "json",
                        data: $('#data').serialize(),
                        success: function(data) {
                            $('#total_harga').val(data.fmt_total_harga);
                            if (data.total_harga > 0) {
                                $('#submit').prop('disabled', false);
                            } else {
                                $('#submit').prop('disabled', true);
                            }
                        }
                    });
                })

                
            });

            
        });
    </script>

</body>

</html>