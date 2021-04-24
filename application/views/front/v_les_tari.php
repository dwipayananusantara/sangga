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
    <section class="container-less-tari" style="padding:50px"><div style="font-size:72px;font-weight:bold;color:black">Pendaftaran Les Tari</div></section>
    <section class="container-less-tari"  style="padding-top:0px">
    <div class="card" style="width: 80rem; border: 0.5px solid black; padding: 20px">
 
    <!-- SK -->
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-info">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Syarat Dan Ketentuan
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <ul>
        <li>Murid sanggar dwipayana nusantara minimal umur 4 tahun.</li>
        <li>kelas berlangsung selama 2 jam dengan waktu istirahat yang di sesuaikan dengan kebutuhan kelas.Selama waktu kelas murid akan dibimbing dari pemanasan , teknik tari yang benar dan koreografi yang sesuai. kelas yang di sediakan akan di tentukan berdasarkan tingkatan umur dan materi yang di berikan akan berbeda dengan tiap minggu nya.</li>
        <li>Sanggar Tari Dwipayana Nusantara menyediakan kelas berdasarkan tingkat umur. Berikut Katagorinya :
            <ul>
                <li>Anak-anak
                    <ul>
                        <li>Kelas A :13-17 Tahun</li>
                        <li>Kelas B :8-12 Tahun</li>
                        <li>Kelas C :4-7 Tahun</li>
                    </ul>
                </li>
                <li>Dewasa
                    <ul>
                        <li>Dibawah 18 Tahun</li>
                        <ul>
                            <li>Kelas ini terbuka untuk pemula tanpa harus memiliki dasar menari. Sehingga tepat untuk anda yang ingin mencoba menari.Materi yang akan diberikan akan berbeda dengan tiap minggunya, sehingga murid nantinya akan menguasai segala jenis Tari Nusantara.</li>
                        </ul>
                    </ul>
                </li>
            </ul>
        </li>
        <li>Detail Paket
            <ul>
                <li>
                Paket kelas terdiri dari 4x pertemuan dalam satu Bulan. 1 pertemuan berdurasi 2 Jam (akan ada kelas tambahan jika murid di ikut sertakan dalam sebuah Event).
                </li>
                <li>
                karena masih dalam kondisi Pandemi maka kelas dilakukan melalui Zoom/Google meeting yang akan di kirim kan melalui grup whatsapp.
                </li>
                <li>
                Setiap murid akan mendapatkan Sebuah Kaos seragam serta 1 buah selendang. 
                </li>
            </ul>
        </li>
    </ul>
      </div>
    </div>
  </div>
  </div>
    <!-- SK END -->

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
                    <option value="D">Kelas D (17 tahun - seterusnya)</option>
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