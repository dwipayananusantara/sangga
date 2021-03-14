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
        </table>
        <table border="1" align="center" style="width:800px;margin-bottom:20px;">
            <tr>
                <th style="text-align:center">No. Invoice</th>
                <th style="text-align:center">No. Pembayaran</th>
                <th style="text-align:center">Jumlah</th>
                <th style="text-align:center">Atas Nama</th>
                <th style="text-align:center">Transfer Ke</th>
                <th style="text-align:center">Tanggal Transfer</th>
            </tr>
            <tbody>
                <?php
                $no = 0;
                foreach ($data->result_array() as $i) :
                    $no++;
                    $id_order = $i['id_order'];
                    $nomor_pembayaran = $i['nomor_pembayaran'];
                    $jumlah = $i['jumlah'];
                    $atas_nama = $i['atas_nama'];
                    $bank = $i['bank'];
                    $tgl_bayar = $i['tgl_bayar'];
                ?>

                    <tr>
                        <td style="text-align:center;"><?php echo $id_order; ?></td>
                        <td style="text-align:center;"><?php echo $nomor_pembayaran; ?></td>
                        <td style="text-align:center;"><?php echo 'Rp. ' . number_format($jumlah); ?></td>
                        <td style="text-align:center;"><?php echo $atas_nama; ?></td>
                        <td style="text-align:center;"><?php echo $bank; ?></td>
                        <td style="text-align:center;"><?php echo $tgl_bayar; ?></td>

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