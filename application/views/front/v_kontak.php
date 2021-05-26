<?php
session_start();
error_reporting(0);
/* if (isset($_POST['send'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $message = $_POST['message'];
    $sql1 = "INSERT INTO contactus (nama_visit,email_visit,telp_visit,pesan) VALUES('$name','$email','$contactno','$message')";
    $lastInsertId = mysqli_query($koneksidb, $sql1);
    if ($lastInsertId) {
        $msg = "Pesan Terkirim. Kami akan menghubungi anda secepatnya.";
    } else {
        $error = "Terjadi Kesalahan! Silahkan coba lagi.";
    }
}*/
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

    <!--Page Header-->
    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Hubungi Kami</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li>Hubungi Kami</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--Contact-us-->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info-item text-center" style="font-size: 50px;">
                        <i class="fa fa-map-marker fa-xs" aria-hidden="true"></i>
                        <h6>Location</h6>

                        <p>Sanggar Seni Dwipayana Nusantara <br>Jl. Sadar I No.51, RT.2/RW.6, Lubang Buaya, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13810</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-item text-center" style="font-size: 50px;">
                        <i class="fa fa-mobile fa-xs" aria-hidden="true"></i>
                        <h6>phone</h6>
                        <p>+62 823-2275-3411</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-item text-center" style="font-size: 50px;">
                        <i class="fa fa-envelope fa-xs" aria-hidden="true"></i>
                        <h6>Email</h6>
                        <p>dwipayananusantara1234@gmail.com</p>
                    </div>
                </div>
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