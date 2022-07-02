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

        .jenazah,
        .ibu,
        .ayah,
        .pelapor,
        .saksi_1,
        .saksi_2,
        .ttd {
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
            <b>SURAT KETERANGAN KEMATIAN</b> <br>
            No. : 472.12/025/III/<?= date('Y'); ?>
        </p>
    </div>

    <div class="text_3">
        <table>
            <tr>
                <td>Nama Kepala Keluarga</td>
                <td>:</td>
                <td><?= $kematian['nama_kepkel']; ?></td>
            </tr>
            <tr>
                <td>No. Kartu Keluarga</td>
                <td>:</td>
                <td><?= $kematian['no_kk']; ?></td>
            </tr>
        </table>
    </div>

    <div class="jenazah">
        <p><b>JENAZAH</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">Nama</td>
                <td>:</td>
                <td><?= $kematian['nama_jenazah']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $kematian['jk_jenazah']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tempat Kelahiran</td>
                <td>:</td>
                <td><?= $kematian['tempat_lahir_jenazah']; ?></td>
            </tr>
        </table>
    </div>

    <div class="ibu">
        <p><b>IBU</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">NIK</td>
                <td>:</td>
                <td><?= $kematian['nik_ibu']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kematian['nama_ibu']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tanggal Lahir / Umur</td>
                <td>:</td>
                <td>Tgl : <?= $kematian['tanggal_lahir_ibu']; ?> | Umur : <?= $kematian['umur_ibu']; ?> </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kematian['pekerjaan_ibu']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kematian['alamat_ibu']; ?> <br>
                    a. Desa/Kelurahan : <?= $kematian['desa_ibu']; ?> | c. Kab/Kota : <?= $kematian['kabupaten_ibu']; ?> <br>
                    b. Kecamatan : <?= $kematian['kecamatan_ibu']; ?> | d. Provinsi : <?= $kematian['provinsi_ibu']; ?>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?= $kematian['warga_negara_ibu']; ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kebangsaan</td>
                <td>:</td>
                <td><?= $kematian['kebangsaan_ibu']; ?></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Tgl. Pencatatan Perkawinan</td>
                <td>:</td>
                <td><?= $kematian['tgl_pencatatan_perkawinan']; ?></td>
            </tr>
        </table>
    </div>
    <div class="ayah">
        <p><b>AYAH</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">NIK</td>
                <td>:</td>
                <td><?= $kematian['nik_ayah']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kematian['nama_ayah']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tanggal Lahir / Umur</td>
                <td>:</td>
                <td>Tgl : <?= $kematian['tanggal_lahir_ayah']; ?> | Umur : <?= $kematian['umur_ayah']; ?> </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kematian['pekerjaan_ayah']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kematian['alamat_ayah']; ?> <br>
                    a. Desa/Kelurahan : <?= $kematian['desa_ayah']; ?> | c. Kab/Kota : <?= $kematian['kabupaten_ayah']; ?> <br>
                    b. Kecamatan : <?= $kematian['kecamatan_ayah']; ?> | d. Provinsi : <?= $kematian['provinsi_ayah']; ?>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?= $kematian['warga_negara_ayah']; ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kebangsaan</td>
                <td>:</td>
                <td><?= $kematian['kebangsaan_ayah']; ?></td>
            </tr>
        </table>
    </div>
    <div class="pelapor">
        <p><b>PELAPOR</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">NIK</td>
                <td>:</td>
                <td><?= $kematian['nik_pelapor']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kematian['nama_pelapor']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Umur</td>
                <td>:</td>
                <td><?= $kematian['umur_pelapor']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>Tgl : <?= $kematian['jk_pelapor']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kematian['pekerjaan_pelapor']; ?></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kematian['alamat_pelapor']; ?> <br>
                    a. Desa/Kelurahan : <?= $kematian['desa_pelapor']; ?> | c. Kab/Kota : <?= $kematian['kabupaten_pelapor']; ?> <br>
                    b. Kecamatan : <?= $kematian['kecamatan_pelapor']; ?> | d. Provinsi : <?= $kematian['provinsi_pelapor']; ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="saksi_1">
        <p><b>SAKSI 1</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">NIK</td>
                <td>:</td>
                <td><?= $kematian['nik_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kematian['nama_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Umur</td>
                <td>:</td>
                <td><?= $kematian['umur_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kematian['pekerjaan_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kematian['alamat_saksi_satu']; ?> <br>
                    a. Desa/Kelurahan : <?= $kematian['desa_saksi_satu']; ?> | c. Kab/Kota : <?= $kematian['kabupaten_saksi_satu']; ?> <br>
                    b. Kecamatan : <?= $kematian['kecamatan_saksi_satu']; ?> | d. Provinsi : <?= $kematian['provinsi_saksi_satu']; ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="saksi_2">
        <p><b>SAKSI 2</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">NIK</td>
                <td>:</td>
                <td><?= $kematian['nik_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kematian['nama_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Umur</td>
                <td>:</td>
                <td><?= $kematian['umur_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kematian['pekerjaan_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kematian['alamat_saksi_dua']; ?> <br>
                    a. Desa/Kelurahan : <?= $kematian['desa_saksi_dua']; ?> | c. Kab/Kota : <?= $kematian['kabupaten_saksi_dua']; ?> <br>
                    b. Kecamatan : <?= $kematian['kecamatan_saksi_dua']; ?> | d. Provinsi : <?= $kematian['provinsi_saksi_dua']; ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="ttd">
        <table width="100%" style="text-align: center;">
            <tr>
                <td>Mengetahui</td>
                <td height="30px"></td>
                <td>Pangebatan, <?= $kematian['tanggal']; ?> <br>
                    Pelapor
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><u>AGUS SUPRIYANTO</u></td>
                <td height="100"></td>
                <td><u><?= $kematian['nama_pelapor']; ?></u></td>
            </tr>
        </table>
    </div>
</body>
<!-- <script>
    window.print();
    window.onafterprint = window.close;
</script> -->

</html>