<!DOCTYPE html>
<html>

<head>
    <title>Cetak Surat Keterangan</title>
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
                <td width="572"><u><b>SURAT KETERANGAN TIDAK MAMPU</b></u></td>
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
                <td><?= strtoupper($sktm['nama_lengkap']); ?></td>
            </tr>
            <tr>
                <td>2. Jenis Kelamin</td>
                <td>:</td>
                <td><?= strtoupper($sktm['jenis_kelamin']); ?></td>
            </tr>
            <tr>
                <td>3. Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><?= strtoupper($sktm['tempat_lahir']); ?> / <?= tgl_indo($sktm['tanggal_lahir']); ?></td>
            </tr>
            <tr>
                <td>4. Warganegara/Agama</td>
                <td>:</td>
                <td><?= strtoupper($sktm['warga_negara']); ?> / <?= strtoupper($sktm['agama']); ?></td>
            </tr>
            <tr>
                <td>5. No. KTP/NIK</td>
                <td>:</td>
                <td><?= strtoupper($sktm['nik']); ?></td>
            </tr>
            <tr>
                <td>6. Pekerjaan</td>
                <td>:</td>
                <td><?= strtoupper($sktm['pekerjaan']); ?></td>
            </tr>
            <tr>
                <td>7. Alamat</td>
                <td>:</td>
                <td><?= strtoupper($sktm['alamat']); ?></td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Berdasarkan Surat Keterangan dari Ketua Rukun Terangga Nomor Tanggal, bahwa yang bersangkutan betul warga Desa Pangebatan dan menurut pengakuan yang bersangkutan keadaan ekonominya TIDAK MAMPU
                    </font>
                </td>
            </tr>
            <tr>
                <td style="padding-top: 6px;">
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Surat keterangan ini digunakan untuk <b><u><?= $sktm['keperluan']; ?></u></b>.
                    </font>
                </td>
            </tr>
            <tr>
                <td style="padding-top: 6px;">
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Demikian Surat Keterangan ini kami buat atas permintaan yang bersangkutan dan dipergunakan sebagaimana mestinya.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625" style="text-align: end;">
            <tr>
                <td></td>
                <td height="60"></td>
                <td>Pangebatan, <?= tgl_indo($sktm['tanggal']); ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td></td>
                <td height="90"></td>
                <td><u>( <?= strtoupper($sktm['nama_lengkap']); ?> )</u></td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print()
</script>

</html>