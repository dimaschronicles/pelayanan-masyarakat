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
                <td width="572"><u><b>SURAT KETERANGAN AHLI WARIS</b></u></td>
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
                <td style="width: 150px;">Nama</td>
                <td style="width: 20px;">:</td>
                <td><?= strtoupper($waris['nama_alm']); ?></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><?= strtoupper($waris['tempat_lahir_alm']); ?> / <?= tgl_indo($waris['tanggal_lahir_alm']); ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= strtoupper($waris['pekerjaan_alm']); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= strtoupper($waris['alamat_alm']); ?></td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Bahwa yang tersebut namanya di atas adalah benar ahli waris dari:
                    </font>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td style="width: 150px;">Nama</td>
                <td style="width: 20px;">:</td>
                <td><?= strtoupper($waris['nama_ahli']); ?></td>
            </tr>
            <tr>
                <td>Tempat/Tanggal Lahir</td>
                <td>:</td>
                <td><?= strtoupper($waris['tempat_lahir_ahli']); ?> / <?= tgl_indo($waris['tanggal_lahir_ahli']); ?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?= strtoupper($waris['pekerjaan_ahli']); ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= strtoupper($waris['alamat_ahli']); ?></td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Demikian Surat Keterangan Ahli Waris ini kami buat dengan sebenar-benarnya untuk dapat dipergunakan sebagaimana mestinya.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625" style="text-align: end;">
            <tr>
                <td></td>
                <td height="60"></td>
                <td>Pangebatan, <?= tgl_indo($waris['tanggal']); ?> <br> Kepala Desa&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
                <td></td>
                <td height="90"></td>
                <td><u>( Nama Kepala Desa )</u></td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print();
    window.onafterprint = window.close;
</script>

</html>