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

        <table border="0" align="center" style="width:800px; border:none;margin-top:5px;margin-bottom:20px;">
            <tr>
                <td colspan="4" style="width:700px;">
                    <center><b>Laporan Metode Pembayaran</b></center><br />
                </td>
            </tr>
        </table>
        <table border="1" align="center" style="width:800px;margin-bottom:20px;">
            <tr>
                <th style="text-align:center">No. Rek</th>
                <th style="text-align:center">Bank</th>
                <th style="text-align:center">Atas Nama</th>
            </tr>
            <tbody>
            <?php
				$no = 0;
				foreach ($data->result_array() as $i) :
					$no++;
					$id = $i['id_metode'];
					$metode = $i['metode'];
					$bank = $i['bank'];
					$norek = $i['norek'];
					$atasnama = $i['atasnama'];
				?>

                <tr>
                    <td style="text-align:center;"><?php echo $norek; ?></td>
                    <td style="text-align:center;"><?php echo $bank; ?></td>
                    <td style="text-align:center;"><?php echo $atasnama; ?></td>

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