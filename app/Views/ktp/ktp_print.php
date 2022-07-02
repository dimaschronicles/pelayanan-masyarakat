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
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <tr>
                <td>
                    <center>
                        <p><b>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</b></p>
                    </center>
                </td>
            </tr>
        </table>
        <!-- <table width="625">
            <tr>
                <td>
                    <font size="2"><b>Perhatian :</b></font>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td>
                    <font size="2">
                        1. Harap diisi dan dicetak menggunakan tinta hitam. <br>
                        2. Harap diisi dan dicetak menggunakan tinta hitam <br>
                        1. Harap diisi dan dicetak menggunakan tinta hitam <br>
                    </font>
                </td>
            </tr>
        </table> -->
        <table width="625" class="text_kode">
            <tr>
                <td style="width: 190px; font-size: 11px;"><b>PEMERINTAH PROVINSI</b></td>
                <td style="width: 20px; font-size: 11px;">:</td>
                <td style="width: 30px; font-size: 11px;">33</td>
                <td style="font-size: 11px;">JAWA TENGAH</td>
            </tr>
            <tr>
                <td style="font-size: 11px;"><b>PEMERINTAH KABUPATEN/KOTA</b></td>
                <td style="font-size: 11px;">:</td>
                <td style="font-size: 11px;">29</td>
                <td style="font-size: 11px;">BREBES</td>
            </tr>
            <tr>
                <td style="font-size: 11px;"><b>KECAMATAN</b></td>
                <td style="font-size: 11px;">:</td>
                <td style="font-size: 11px;">02</td>
                <td style="font-size: 11px;">BANTARKAWUNG</td>
            </tr>
            <tr>
                <td style="font-size: 11px;"><b>KELURAHAN/DESA</b></td>
                <td style="font-size: 11px;">:</td>
                <td style="font-size: 11px;">2012</td>
                <td style="font-size: 11px;">PANGEBATAN</td>
            </tr>
            <tr>
                <td style="font-size: 11px; padding-top: 15px;"><b><i><u>PERMOHONAN KTP</u></i></b></td>
                <td style="font-size: 11px; padding-top: 15px;"></td>
                <td style="font-size: 11px; padding-top: 15px;">:</td>
                <td style="font-size: 11px; padding-top: 15px;"><?= strtoupper($ktp['jenis']); ?></td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td style="width: 150px;">1. Nama</td>
                <td style="width: 20px;">:</td>
                <td><?= strtoupper($ktp['nama_lengkap']); ?></td>
            </tr>
            <tr>
                <td>2. No. KK</td>
                <td>:</td>
                <td><?= strtoupper($ktp['nomor_kk']); ?></td>
            </tr>
            <tr>
                <td>3. NIK</td>
                <td>:</td>
                <td><?= strtoupper($ktp['nik']); ?></td>
            </tr>
            <tr>
                <td>4. Alamat</td>
                <td>:</td>
                <td>
                    <?= strtoupper($ktp['alamat']); ?> | RT : <?= $ktp['rt']; ?> RW : <?= $ktp['rw']; ?> | Kode Pos :
                </td>
            </tr>
        </table>
        <br>
        <table width="625" style="text-align: center;">
            <tr>
                <td>Pas Foto (2x3)</td>
                <td>Cap Jempol</td>
                <td height="80"></td>
                <td>
                    Pangebatan, <?= tgl_indo($ktp['tanggal']); ?> <br>
                    Pemohon
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>(foto)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>_______</td>
                <td>_______</td>
                <td height="80"></td>
                <td><u><?= strtoupper($ktp['nama_lengkap']); ?></u></td>
            </tr>
        </table>
        <p style="font-size: 11px;">Mengetahui</p>
        <table width="625" style="text-align: center;">
            <tr>
                <td>Camat Bantarkawung</td>
                <td height="100"></td>
                <td>Pangebatan, </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    (_____________________________) <br>
                    NIP.
                </td>
                <td height="100"></td>
                <td><u>AGUS SUPRIYANTO</u></td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print();
    window.onafterprint = window.close;
</script>

</html>