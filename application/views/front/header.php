<header>
    <div class="default-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <div class="logo"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>front/images/icon.png" width="130px" height="130px" alt="image" /></a> </div>
                </div>
                <div class="col-sm-8 col-md-8">
                    <div class="header_info">
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">Sanggar Seni Dwipayana Nusantara</p>
                        </div>
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">Telp : </p>
                            <a href="tel:+62812-3636-6860">+62 823-2275-3411</a>
                        </div>
                        <?php if ($this->session->userdata('akses') == null) {
                        ?>
                            <div class="login_btn">
                                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'login' ?>">
                                    <input type="hidden" class="form-control" name="ref" value="<?php echo base_url(uri_string()) ?>" />
                                    <div class="box-header">
                                        <input type="submit" class="btn btn-xs uppercase" value="Masuk / Daftar" />
                                    </div>
                                </form>
                            </div>
                        <?php } else {
                            echo "Selamat Datang!";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">
                <div class="user_login">
                    <ul>
                        <?php if ($this->session->userdata('akses') == null) {
                            null; ?>
                        <?php } else { ?>
                            <li class="dropdown" bgcolor="blue"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() . 'profile' ?>">Pengaturan Profile</a></li>
                                    <li><a href="<?php echo base_url() . 'update_password' ?>">Ganti Password</a></li>
                                    <li><a href="<?php echo base_url() . 'riwayatsewa' ?>">Riwayat Sewa</a></li>
                                    <li><a href="<?php echo base_url() . 'login/logout' ?>">Keluar</a></li>
                                </ul>
                            <?php } ?>
                            </li>
                    </ul>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url() ?>">Beranda</a></li>
                    <li class="dropdown" bgcolor="blue"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kostum</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() . 'product/adat/' ?>">Kostum Adat</a></li>
                            <li><a href="<?php echo base_url() . 'product/tari/' ?>">Kostum Tari</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" bgcolor="blue"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() . 'product/les_tari' ?>">Sanggar Tari</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() . 'about' ?>">Tentang Kami</a></li>
                    <li><a href="<?php echo base_url() . 'kontak' ?>">Hubungi Kami</a></li>
                    <li><a href="<?php echo base_url() . 'review' ?>">Ulasan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>