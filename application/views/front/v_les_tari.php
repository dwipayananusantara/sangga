<?php
//
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <link href="<?php echo base_url() . 'front/css/custom.css' ?>" rel="stylesheet">
    <title>Sanggar - Pendaftaran Les Tari</title>
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
        <div class="card-body">
            <form action="<?php echo base_url() ?>backend/les_tari/simpan" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="input" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="cth. Dwipayana Nusantara" required>
                </div>
                <div class="form-group">
                    <label for="ttl">Tempat Tanggal Lahir</label>
                    <input type="input" name="ttl" class="form-control" id="ttl" placeholder="cth. Tasikmalaya, 30 Agustus 2001" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                    <option value="A">Kelas A (13 - 17 Tahun)</option>
                    <option value="B">Kelas B (8 - 12 Tahun)</option>
                    <option value="C">Kelas C (4 - 7 Tahun)</option>
                    <option value="D">Kelas D (Dibawah 18 Tahun)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telpon</label>
                    <input type="input" name="no_telp" class="form-control" id="no_telp" placeholder="cth. 0812242046576" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="cth. dwipayananusantara@gmail.com" required>
                </div>
                <div class="form-group">
                    <label for="photo">Pas Foto</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
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