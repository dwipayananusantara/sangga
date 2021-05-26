<?php
//
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <link href="<?php echo base_url() . 'front/css/custom.css' ?>" rel="stylesheet">
    <title>Sanggar - Pembayaran</title>
</head>

<body>

    <!-- Start Switcher -->
    <!-- <?php include('colorswitcher.php'); ?> -->
    <!-- /Switcher -->

    <!--Header-->
    <?php include('header.php'); ?>
    <!-- /Header -->

    <!--form-les-tari-->
    <section class="container-less-tari">
    <div class="card" style="width: 80rem; border: 0.5px solid black; padding: 20px">
    <?php if($data[1]){ echo '<div class="alert alert-info" role="alert"><strong>Info!</strong> Anda sudah terdaftar sebelumnya, silahkan lengkapi pembayaran!</div>'; } ?>
    <h2>Hallo <?php  echo $data[0][0]['nama_lengkap']?></h2>
    <h5>Silahkan Melakukan Pembayaran</h5>
    </br></br>
        <div class="card-body">
            <form action="<?php echo base_url() ?>backend/les_tari/memperbarui_bukti_pembayaran" method="post" enctype="multipart/form-data" >
            <!-- <?php //var_dump($data[0][0]['alamat']); ?> -->
                <div class="form-group">
                    <label class="control-label">Nomer Registrasi</label>
                    <input class="form-control" readonly required value="<?php echo  $data[0][0]['no_registrasi']; ?>" type="text" name="no_registrasi" id="no_registrasi">
                </div>
                <div class="form-group">
                    <label class="control-label">Alamat Email</label>
                    <input class="form-control"  value="<?php echo  $data[0][0]['email']; ?>" name="email" id="email" type="email" required readonly>
                </div>
                <div class="form-group">
                    <label class="control-label">Telepon</label>
                    <input class="form-control" disabled name="no_telp" value="<?php echo  $data[0][0]['no_telp']; ?>" id="phone" type="number" min="0" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <textarea class="form-control" disabled name="alamat" rows="4"><?php echo  $data[0][0]['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="control-label">Kategori</label>
                    <input class="form-control" disabled name="kategori" value="<?php echo  $data[0][0]['kategori']; ?>" id="kategori" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label">Jenis Kelamin</label>
                    <input class="form-control" disabled name="jenis_kelamin" value="<?php echo  $data[0][0]['jenis_kelamin']; ?>" id="jenis_kelamin" type="text">
                </div>
                <div class="form-group">
                    <label for="kategori">Metode Pembayaran</label>
                        <select class="form-control white_bg" id="metode_pembayaran" name="metode_pembayaran" require>
                            <option value="BCA">BCA - 12345672123 - (Rp.200.000)</option>
                            <option value="BRI">BRI - 44444672123 - (Rp.200.000)</option>
                            <option value="SIMPEDES">SIMPEDES - 666665672123 - (Rp.200.000)</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="bukti_pembayaran">Bukti pembayaran</label>
                    <input type="file" class="form-control-file" id="bukti_pembayaran" name="bukti_pembayaran" required oninvalid="this.setCustomValidity('Silahkan masukan foto struk bukti pembayaran')">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-sm">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    </section>
    <!--/form-les-tari-->

    <?php include "footer.php"; ?>
    <?php include "loader.php"; ?>

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

</body>

</html>