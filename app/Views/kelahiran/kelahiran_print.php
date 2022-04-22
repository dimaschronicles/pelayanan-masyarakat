<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
        .text_1 {
            font-size: 8px;
        }

        .text_2 {
            font-size: 13px;
            text-align: center;
        }

        .text_3 {
            font-size: 8px;
        }
    </style>
</head>

<body>
    <div class="text_1">
        <table>
            <tr>
                <td>Pemerintah Desa/Kelurahan</td>
                <td>:</td>
                <td>PANGEBATAN</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>BANTARKAWUNG</td>
            </tr>
            <tr>
                <td>Kabupaten/Kota</td>
                <td>:</td>
                <td>BREBES</td>
            </tr>
            <tr>
                <td>Kode Wilayah</td>
                <td>:</td>
                <td>33.29.02.2012</td>
            </tr>
        </table>
    </div>

    <div class="text_2">
        <p>
            <b>SURAT KETERANGAN KELAHIRAN</b> <br>
            No. : 472.11/022/111/<?= date('Y'); ?>
        </p>
    </div>

    <div class="text_3">
        <table>
            <tr>
                <td>Nama Kepala Keluarga</td>
                <td>:</td>
                <td><?= $kelahiran['nama_kepkel']; ?></td>
            </tr>
            <tr>
                <td>No. Kartu Keluarga</td>
                <td>:</td>
                <td><?= $kelahiran['no_kk']; ?></td>
            </tr>
        </table>
    </div>

    <div class="anak"></div>
    <div class="ibu"></div>
    <div class="ayah"></div>
    <div class="pelapor"></div>
    <div class="saksi_1"></div>
    <div class="saksi_2"></div>
</body>

</html>