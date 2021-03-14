<html lang="en" moznomarginboxes mozdisallowselectionprint>

<head>
    <title><?php echo $judul ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/laporan.css') ?>" />
</head>

<body onLoad="window.print()">
    <div id="laporan">
        <table align="center" style="width:800px; border-bottom:3px double;border-top:none;border-right:none;border-left:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td><img src="<?php echo base_url() . 'assets/images/mylogo.png' ?>" /></td>
            </tr>
        </table>

        <table border="0" align="center" style="width:800px; border:none;">
            <tr>
                <td colspan="4" style="width:700px;">
                    <center><b><?php echo $judul ?></b></center><br />
                </td>
            </tr>
        </table>
        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td style="width:110px;padding-left:5px;">Tanggal Dari</td>
                <td>: <?php echo $tgl_dari ?></td>
                <td style="padding-left:5px;">Tanggal Sampai</td>
                <td>: <?php echo $tgl_sampai ?></td>
            </tr>
            <tr>
                <td style="width:110px;padding-left:5px;">Status</td>
                <td>: <?php echo $status ?></td>
            </tr>
        </table>
        <table border="1" align="center" style="width:900px;margin-bottom:20px;">
            <tr>
                <th style="text-align:center">No. Invoice</th>
                <th style="text-align:center">Tgl Invoice</th>
                <th style="text-align:center">Atas Nama</th>
                <th style="text-align:center">Jumlah</th>
                <th style="text-align:center">Ambil</th>
                <th style="text-align:center">Kembali</th>
                <th style="text-align:center">Total Bayar</th>
                <th style="text-align:center">Status</th>
                <th style="text-align:center">Dikembalikan</th>
                <th style="text-align:center">Tanggal Pengembalian</th>
                <th style="text-align:center">Barang Rusak Atau Hilang</th>
            </tr>
            <tbody>
                <?php
                $no = 0;
                foreach ($data->result_array() as $i) :
                    $no++;
                    $id_order = $i['id'];
                    $tanggal = $i['tanggal'];
                    $nama = $i['nama'];
                    $quantity = $i['quantity'];
                    $ambil = $i['ambil'];
                    $kembali = $i['kembali'];
                    $harga_total = $i['harga_total'];
                    $status = $i['status'];
                    $is_kembali = ($i['is_kembali'] != 0)?'Sudah Dikembalikan':'Belum Dikembalikan';
                    $tgl_pengembalian = $i['dikembalikan'];
                    $is_rusak = ($i['is_rusak'] != 0)?'Barang Rusak Atau Hilang':'Barang Rusak Atau Hilang';
                ?>

                    <tr>
                        <td style="text-align:center;"><?php echo $id_order; ?></td>
                        <td style="text-align:center;"><?php echo $tanggal; ?></td>
                        <td style="text-align:center;"><?php echo $nama; ?></td>
                        <td style="text-align:center;"><?php echo $quantity; ?></td>
                        <td style="text-align:center;"><?php echo $ambil; ?></td>
                        <td style="text-align:center;"><?php echo $kembali; ?></td>
                        <td style="text-align:center;"><?php echo 'Rp. ' . number_format($harga_total); ?></td>
                        <td style="text-align:center;"><?php echo $status; ?></td>
                        <td style="text-align:center;"><?php echo $is_kembali; ?></td>
                        <td style="text-align:center;"><?php echo $tgl_pengembalian; ?></td>
                        <td style="text-align:center;"><?php echo $is_rusak; ?></td>

                    </tr>
                <?php endforeach; ?>

        </table>
        <table align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td align="right">Jakarta, <?php echo date('d-M-Y') ?></td>
            </tr>

        </table>

    </div>
</body>

</html>