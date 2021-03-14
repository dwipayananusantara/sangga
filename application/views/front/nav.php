<nav class="navbar navbar-expand-lg static-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="front/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() . 'product' ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() . 'about' ?>">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() . 'kontak' ?>">Contact Us</a>
                </li>
                <?php if ($this->session->userdata('akses') != '') : ?>
                    <li class="nav-item cta"><a href="<?php echo base_url() . 'backend/orders' ?>" class="nav-link"><span>Dashboard</span></a></li>
                <?php else : ?>
                    <li class="nav-item cta"><a href="<?php echo base_url() . 'login' ?>" class="nav-link"><span>Login</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>