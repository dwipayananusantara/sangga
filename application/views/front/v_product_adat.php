<?php
include('format_rupiah.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include('head.php'); ?></head>

<body>

    <!-- Start Switcher -->
    <!-- <?php include('colorswitcher.php'); ?> -->
    <!-- /Switcher -->

    <!--Header-->
    <?php include('header.php'); ?>
    <!-- /Header -->

    <!--Page Header-->
    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Daftar Kostum Adat</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Daftar Kostum Adat</li>
                </ul>
            </div>
        </div>
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--Listing-->
    <section class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">

                    <?php
                    foreach ($product->result_array() as $i) {
                        $id_product = $i['id_product'];
                        $nama_product = $i['nama_product'];
                        $nama_provinsi = $i['nama_provinsi'];
                        $nama_gender = $i['nama_gender'];
                        $harga_product = $i['harga_product'];
                        $gambar = $i['gambar'];

                    ?>
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"><img src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities($gambar); ?>" class="img-responsive" alt="Image" /> </a>
                            </div>
                            <div class="product-listing-content">
                                <h5><a href="<?php echo base_url() . 'product/detail_product/' . $id_product ?>"><?php echo $nama_product . ' (', $nama_provinsi . ')'; ?></a></h5>
                                <h6><a><?php echo $nama_gender ?></a></h6>
                                <p class="list-price"><?php echo htmlentities(format_rupiah($harga_product)); ?> / 3 Hari</p>
                                <a href="<?php echo base_url() . 'product/detail_product/' . $id_product ?>" class="btn">Lihat Detail <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3 col-md-pull-9">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i>Cari Kostum</h5>
                        </div>
                        <div class="sidebar_filter">
                            <form action="<?php echo base_url() ?>product/adat" method="post">
                                <div class="form-group select">
                                    <select class="form-control" name="pulau" id="pulau">
                                        <option value="" selected>Pulau</option>
                                        <?php
                                        foreach ($pulau->result_array() as $i) {
                                            $id_pulau = $i['id_pulau'];
                                            $nama_pulau = $i['nama_pulau'];

                                        ?>
                                            <option value="<?php echo $id_pulau; ?>"><?php echo $nama_pulau; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="" selected>Gender</option>
                                        <option value="L">Laki - Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i>Cari</button>
                                </div>
                            </form>
                        </div>
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

</body>

</html>