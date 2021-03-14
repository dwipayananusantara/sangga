<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title><?php echo $judul ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
</head>

<body onLoad="window.print()">
    <div id="laporan">
        <?php
        error_reporting(0);
        $b = $data->row_array();
        //$c=$samp->row_array();
        ?>
        <table align="center" style="width:800px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td><img src="<?php echo base_url() . 'assets/images/mylogo.png' ?>" /></td>
            </tr>
        </table>

        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td colspan="4" style="width:700px;">
                    <center>Deposit Dikembalikan</center><br />
                </td>
            </tr>
            <tr>
                <td style="width:110px;padding-left:5px;">No Invoice</td>
                <td>: <?php echo $b['id_order'] ?></td>
                <td style="width:100px;padding-left:5px;">Nama</td>
                <td>: <?php echo $b['nama'] ?></td>
            </tr>
            <tr>
                <td style="padding-left:5px;">Tgl Invoice</td>
                <td>: <?php echo $b['tanggal'] ?></td>
                <td style="padding-left:5px;">Alamat</td>
                <td>: <?php echo $b['alamat']; ?></td>
            </tr>
            
            <tr>
                <td style="padding-left:5px;">Harga Kostum</td>
                <td>: <?php echo 'Rp. ' . number_format($b['harga_kostum']); ?></td>
                <td style="padding-left:5px;">No Telp/HP</td>
                <td>: <?php echo $b['phone']; ?></td>
            </tr>
            <tr>
                <td style="padding-left:5px;">Jumlah Deposit</td>
                <td>: <?php echo 'Rp. ' . number_format($b['harga_deposit']); ?></td>
                <td style="padding-left:5px;">Email</td>
                <td>: <?php echo $b['email']; ?></td>
            </tr>
            <tr>
                <td style="padding-left:5px;">Kuantitas</td>
                <td>: <?php echo number_format($b['quantity']); ?></td>
                <td style="padding-left:5px;">Ambil</td>
                <td>: <?php echo $b['ambil']; ?></td>
            </tr>
            <tr>
                <td style="padding-left:5px;">Total Harga</td>
                <td>: <?php echo 'Rp. ' . number_format($b['harga_total']); ?></td>
                <td style="padding-left:5px;">Kembali</td>
                <td>: <?php echo $b['kembali']; ?></td>
            </tr>
            <tr>
                <td style="padding-left:5px;">Denda Pengembalian</td>
                <td>: <?php echo 'Rp. ' . number_format($b['denda_pengembalian']); ?></td>
            </tr>
            <tr>
                <td style="padding-left:5px;">Total Dikembalikan</td>
                <td>: <?php echo 'Rp. ' . number_format($b['deposit_kembali']); ?></td>
            </tr>
        </table>
        <table align="right" style="width:1500px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="center">Jakarta, <?php echo date('d-M-Y') ?></td>
            </tr>

            <tr>
                <td><br /><br /><br /><br /></td>
            </tr>
            <tr>
                <td align="center"><b>( <?php echo $b['nama']; ?> )</b></td>
            </tr>

        </table>

    </div>
</body>

</html>