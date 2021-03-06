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

        .anak,
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

    <div class="anak">
        <p><b>BAYI/ANAK</b></p>
        <table style="width: 100%; border: 1px solid black; border-collapse: collapse;">
            <tr>
                <td style="width: 5%;">1</td>
                <td style="width: 10%;">Nama</td>
                <td>:</td>
                <td><?= $kelahiran['nama_anak']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?= $kelahiran['jk_anak']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tempat Dilahirkan</td>
                <td>:</td>
                <td><?= $kelahiran['tempat_dilahirkan_anak']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Tempat Kelahiran</td>
                <td>:</td>
                <td><?= $kelahiran['tempat_lahir_anak']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><?= $kelahiran['tanggal_lahir_anak']; ?></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pukul</td>
                <td>:</td>
                <td><?= $kelahiran['pukul']; ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Jenis Kelahiran</td>
                <td>:</td>
                <td><?= $kelahiran['jenis_kelahiran']; ?></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Kelahiran Ke</td>
                <td>:</td>
                <td><?= $kelahiran['kelahiran_ke']; ?></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Penolong Kelahiran</td>
                <td>:</td>
                <td><?= $kelahiran['penolong_kelahiran']; ?></td>
            </tr>
            <tr>
                <td>10</td>
                <td>Berat Bayi</td>
                <td>:</td>
                <td><?= $kelahiran['berat_anak']; ?> kg</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Panjang Bayi</td>
                <td>:</td>
                <td><?= $kelahiran['panjang_anak']; ?> cm</td>
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
                <td><?= $kelahiran['nik_ibu']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kelahiran['nama_ibu']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tanggal Lahir / Umur</td>
                <td>:</td>
                <td>Tgl : <?= $kelahiran['tanggal_lahir_ibu']; ?> | Umur : <?= $kelahiran['umur_ibu']; ?> </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kelahiran['pekerjaan_ibu']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kelahiran['alamat_ibu']; ?> <br>
                    a. Desa/Kelurahan : <?= $kelahiran['desa_ibu']; ?> | c. Kab/Kota : <?= $kelahiran['kabupaten_ibu']; ?> <br>
                    b. Kecamatan : <?= $kelahiran['kecamatan_ibu']; ?> | d. Provinsi : <?= $kelahiran['provinsi_ibu']; ?>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?= $kelahiran['warga_negara_ibu']; ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kebangsaan</td>
                <td>:</td>
                <td><?= $kelahiran['kebangsaan_ibu']; ?></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Tgl. Pencatatan Perkawinan</td>
                <td>:</td>
                <td><?= $kelahiran['tgl_pencatatan_perkawinan']; ?></td>
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
                <td><?= $kelahiran['nik_ayah']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kelahiran['nama_ayah']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Tanggal Lahir / Umur</td>
                <td>:</td>
                <td>Tgl : <?= $kelahiran['tanggal_lahir_ayah']; ?> | Umur : <?= $kelahiran['umur_ayah']; ?> </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kelahiran['pekerjaan_ayah']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kelahiran['alamat_ayah']; ?> <br>
                    a. Desa/Kelurahan : <?= $kelahiran['desa_ayah']; ?> | c. Kab/Kota : <?= $kelahiran['kabupaten_ayah']; ?> <br>
                    b. Kecamatan : <?= $kelahiran['kecamatan_ayah']; ?> | d. Provinsi : <?= $kelahiran['provinsi_ayah']; ?>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?= $kelahiran['warga_negara_ayah']; ?></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kebangsaan</td>
                <td>:</td>
                <td><?= $kelahiran['kebangsaan_ayah']; ?></td>
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
                <td><?= $kelahiran['nik_pelapor']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kelahiran['nama_pelapor']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Umur</td>
                <td>:</td>
                <td><?= $kelahiran['umur_pelapor']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>Tgl : <?= $kelahiran['jk_pelapor']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kelahiran['pekerjaan_pelapor']; ?></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kelahiran['alamat_pelapor']; ?> <br>
                    a. Desa/Kelurahan : <?= $kelahiran['desa_pelapor']; ?> | c. Kab/Kota : <?= $kelahiran['kabupaten_pelapor']; ?> <br>
                    b. Kecamatan : <?= $kelahiran['kecamatan_pelapor']; ?> | d. Provinsi : <?= $kelahiran['provinsi_pelapor']; ?>
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
                <td><?= $kelahiran['nik_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kelahiran['nama_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Umur</td>
                <td>:</td>
                <td><?= $kelahiran['umur_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kelahiran['pekerjaan_saksi_satu']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kelahiran['alamat_saksi_satu']; ?> <br>
                    a. Desa/Kelurahan : <?= $kelahiran['desa_saksi_satu']; ?> | c. Kab/Kota : <?= $kelahiran['kabupaten_saksi_satu']; ?> <br>
                    b. Kecamatan : <?= $kelahiran['kecamatan_saksi_satu']; ?> | d. Provinsi : <?= $kelahiran['provinsi_saksi_satu']; ?>
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
                <td><?= $kelahiran['nik_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $kelahiran['nama_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Umur</td>
                <td>:</td>
                <td><?= $kelahiran['umur_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= $kelahiran['pekerjaan_saksi_dua']; ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $kelahiran['alamat_saksi_dua']; ?> <br>
                    a. Desa/Kelurahan : <?= $kelahiran['desa_saksi_dua']; ?> | c. Kab/Kota : <?= $kelahiran['kabupaten_saksi_dua']; ?> <br>
                    b. Kecamatan : <?= $kelahiran['kecamatan_saksi_dua']; ?> | d. Provinsi : <?= $kelahiran['provinsi_saksi_dua']; ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="ttd">
        <table width="100%" style="text-align: center;">
            <tr>
                <td>Mengetahui</td>
                <td height="30px"></td>
                <td>Pangebatan, <?= $kelahiran['tanggal']; ?> <br>
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
                <td><u><?= $kelahiran['nama_pelapor']; ?></u></td>
            </tr>
        </table>
    </div>
</body>
<script>
    window.print();
    window.onafterprint = window.close;
</script>

</html>