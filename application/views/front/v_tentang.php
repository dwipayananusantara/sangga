<?php
session_start();
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
    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Tentang Kami</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Beranda</a></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <section class="about_us section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="mb-4">Sanggar Seni Dwipayana Nusantara</h2>
                 <center><img width="800" height="500" src="<?php echo base_url() ?>front/images/baju/<?php echo htmlentities('tentang.jpeg'); ?>" alt="Owl Image"></center>
                 <br><p align="center">Sanggar Seni Dwipayana Nusantara adalah Sanggar Pimpinan Bpk. I Wayan Suarka, S.E yang telah berdiri sejak tahun 1982, dengan 4 orang pelatih sanggar:</p>
<br> <p align="center"> - Ni Wayan Wirati
<br>- Ni Nyoman Widia Pertiwi
<br>- Ni Made Widyantari
<br>- Ni Putu Widiasih, S.Sn</p>
<br><p align="center"> Beralamat di Jalan Lubang Buaya Gang Sadar 1 No. 51 RT/RW 02/06 , Cipayung, Jakarta Timur.</p>
<br><p align="center">
<br>Sanggar Seni Dwipayana Nusantara juga menyediakan kesenian lain seperti:
iringan musik bleganjur, pertunjukan Reyog Ponorogo, tari Barong Bali, tari Kecak, Kendang Beleg, Drama Teater daerah dan jasa tari-tarian nusantara lainnya untuk pesanan event tertentu.
</p>
            </div>
        </div>
    </section>
    <!-- /About-us-->

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

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->

</html>