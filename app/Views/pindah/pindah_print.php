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
        .tdd {
            display: inline-table;
        }
    </style>
</head>

<body>
    <center>
        <table>
            <tr>
                <td>
                    <center>
                        <h3><b>SURAT KETERANGAN PINDAH <br>
                                <u>ANTAR KABUPATEN ATAU ANTAR PROVINSI</u> <br><br>
                                Nomor :
                            </b></h3>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Yang bertanda tangan di bawah ini, menerangkan Permohonan Pindah Penduduk WNI dengan data sebagai berikut :</font>
                </td>
            </tr>
        </table>
        <table width="625">
            <tr>
                <td style="width: 200px;">1. NIK</td>
                <td style="width: 20px;">:</td>
                <td><?= strtoupper($pindah['nik']); ?></td>
            </tr>
            <tr>
                <td>2. Nama Lengkap</td>
                <td>:</td>
                <td><?= strtoupper($pindah['nama_lengkap']); ?></td>
            </tr>
            <tr>
                <td>3. Nomor Kartu Keluarga</td>
                <td>:</td>
                <td><?= strtoupper($pindah['no_kk']); ?></td>
            </tr>
            <tr>
                <td>4. Nama Kepala Keluarga</td>
                <td>:</td>
                <td><?= strtoupper($pindah['nama_kepkel']); ?></td>
            </tr>
            <tr>
                <td>5. Alamat Sekarang</td>
                <td>:</td>
                <td><?= strtoupper($pindah['alamat_sekarang']); ?></td>
            </tr>
            <tr>
                <td>6. Alamat Tujuan</td>
                <td>:</td>
                <td><?= strtoupper($pindah['alamat_tujuan']); ?></td>
            </tr>
            <tr>
                <td>7. Jumlah Keluarga Yang Pindah</td>
                <td>:</td>
                <td><?= strtoupper($pindah['jumlah_keluarga']); ?> Orang</td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Adapun Permohonan Pindah Penduduk WNI yang bersangkutan sebagaimana terlampir.</font>
                </td>
            </tr>
            <tr>
                <td>
                    <font size="2">Demikian Surat Pengantar Pindah ini dibuat agar digunakan sebagaimana mestinya.</font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625" style="text-align: center;">
            <tr>
                <td>Mengetahui, <br> Camat Bantarkawung</td>
                <td height="60"></td>
                <td>Pangebatan, <?= tgl_indo($pindah['tanggal']); ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>( ________________________ )</td>
                <td height="60"></td>
                <td><u><?= strtoupper($pindah['nama_lengkap']); ?></u></td>
            </tr>
        </table>
    </center>
</body>

<script>
    window.print()
</script>

</html>