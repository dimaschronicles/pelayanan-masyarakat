<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: left;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        /* my */
        .ket {
            text-align: center;
        }

        .tdd {
            display: inline-table;
        }
    </style>
</head>

<body>
    <center>
        <table width="625">
            <tr>
                <td><img src="<?= base_url(); ?>/img/logo_brebes.png" width="70"></td>
                <td>
                    <center>
                        <font size="3"><b>PEMERINTAH KABUPATEN BREBES</b></font><br>
                        <font size="3"><b>KECAMATAN BANTARKAWUNG</b></font><br>
                        <font size="4"><b>DESA PANGEBATAN</b></font><br><br>
                        <font size="2"><b>Jl. Raya Pangebatan</b></font>
                    </center>
                </td>
                <td width="50"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <table width="625">
                <tr>
                    <td class="text2">Kode Desa/Kelurahan : 2922012</td>
                </tr>
            </table>
        </table>
        <table class="ket">
            <tr class="text2">
                <td width="572"><u><b>PENGANTAR NUMPANG NIKAH</b></u></td>
            </tr>
            <tr>
                <td width="564">Nomor : </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Yang bertanda tangan di bawah ini kami Kepala Desa Pangebatan Kecamatan Bantarkawung Kabupaten Brebes Provinsi Jawa Tengah, menerangkan bahwa :</font>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td style="width: 150px;">1. Nama</td>
                <td style="width: 20px;">:</td>
                <td><?= strtoupper($nikah['nama']); ?></td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>:</td>
                <td><?= strtoupper($nikah['jenis_kelamin']); ?></td>
            </tr>
            <tr>
                <td>3. Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><?= strtoupper($nikah['tempat_lahir']); ?> / <?= tgl_indo($nikah['tanggal_lahir']); ?></td>
            </tr>
            <tr>
                <td>4. Warganegara</td>
                <td>:</td>
                <td><?= strtoupper($nikah['warga_negara']); ?></td>
            </tr>
            <tr>
                <td>5. Agama</td>
                <td>:</td>
                <td><?= strtoupper($nikah['agama']); ?></td>
            </tr>
            <tr>
                <td>6. Pekerjaan</td>
                <td>:</td>
                <td><?= strtoupper($nikah['pekerjaan']); ?></td>
            </tr>
            <tr>
                <td>7. Tempat Tinggal</td>
                <td>:</td>
                <td><?= strtoupper($nikah['tempat_tinggal']); ?></td>
            </tr>
            <tr>
                <td>8. Surat bukti diri</td>
                <td>:</td>
                <td>
                    NIK. : <?= $nikah['nik']; ?> |
                    No. KK : <?= $nikah['no_kk']; ?>
                </td>
            </tr>
            <tr>
                <td>9. Keperluan</td>
                <td>:</td>
                <td><?= strtoupper($nikah['keperluan']); ?></td>
            </tr>
            <tr>
                <td>10. Berlaku</td>
                <td>:</td>
                <?php $tgl = date('Y-m-d', strtotime($nikah['tanggal'] . '+30 day'));  ?>
                <td><?= tgl_indo($nikah['tanggal']); ?> s/d <?= tgl_indo($tgl); ?> </td>
            </tr>
            <tr>
                <td>11. Keterangan lain</td>
                <td>:</td>
                <td><?= strtoupper($nikah['keterangan']); ?></td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Demikian Surat Keterangan ini dipergunakan seperlunya.
                    </font>
                </td>
            </tr>
        </table>
        <br>

        <table width="625" style="text-align: center;">
            <tr>
                <td>Pemohon</td>
                <td>Mengetahui, Camat Bantarkawung</td>
                <td height="50"></td>
                <td>Pangebatan, <?= tgl_indo($nikah['tanggal']); ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><u><?= strtoupper($nikah['nama']); ?></u></td>
                <td>( _____________________ )</td>
                <td height="90"></td>
                <td><u>LUKMANUL HAKIM</u></td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print()
</script>

</html>