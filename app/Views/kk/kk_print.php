<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="text-align: center;"><b>FORMULIR PERMOHONAN KARTU KELUARGA (KK) WARGA NEGARA INDONESIA</b></p>
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
    </table>
    <br>
    <table width="625" style="font-size: 13px;">
        <tr>
            <td style="width: 150px;">1. Nama</td>
            <td style="width: 20px;">:</td>
            <td><?= strtoupper($kk['nama_lengkap']); ?></td>
        </tr>
        <tr>
            <td>2. No. KK</td>
            <td>:</td>
            <td><?= strtoupper($kk['no_kk']); ?></td>
        </tr>
        <tr>
            <td>3. NIK</td>
            <td>:</td>
            <td><?= strtoupper($kk['nik']); ?></td>
        </tr>
        <tr>
            <td>4. Alamat</td>
            <td>:</td>
            <td>
                <?= strtoupper($kk['alamat']); ?> | RT : <?= $kk['rt']; ?> RW : <?= $kk['rw']; ?> | Kode Pos :
            </td>
        </tr>
        <tr>
            <td>5. Alasan</td>
            <td>:</td>
            <td><?= strtoupper($kk['alasan']); ?></td>
        </tr>
        <tr>
            <td>6. Jumlah Keluarga</td>
            <td>:</td>
            <td><?= $kk['jumlah_keluarga']; ?></td>
        </tr>
    </table>
    <p style="font-size: 13px;">7. DAFTAR ANGGOTA KELUARGA PEMOHON</p>
    <table style="width: 100%; text-align: center; border: 1px solid black; border-collapse: collapse;">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $kk['anggota_1_nik']; ?></td>
            <td><?= strtoupper($kk['anggota_1_nama']); ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_2_nik'] == null) ? '-' : '2'; ?></td>
            <td><?= ($kk['anggota_2_nik'] == null) ? '-' : $kk['anggota_2_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_2_nama']) == null) ? '-' : $kk['anggota_2_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_3_nik'] == null) ? '-' : '3'; ?></td>
            <td><?= ($kk['anggota_3_nik'] == null) ? '-' : $kk['anggota_3_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_3_nama']) == null) ? '-' : $kk['anggota_3_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_4_nik'] == null) ? '-' : '4'; ?></td>
            <td><?= ($kk['anggota_4_nik'] == null) ? '-' : $kk['anggota_4_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_4_nama']) == null) ? '-' : $kk['anggota_4_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_5_nik'] == null) ? '-' : '5'; ?></td>
            <td><?= ($kk['anggota_5_nik'] == null) ? '-' : $kk['anggota_5_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_5_nama']) == null) ? '-' : $kk['anggota_5_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_6_nik'] == null) ? '-' : '6'; ?></td>
            <td><?= ($kk['anggota_6_nik'] == null) ? '-' : $kk['anggota_6_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_6_nama']) == null) ? '-' : $kk['anggota_6_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_7_nik'] == null) ? '-' : '7'; ?></td>
            <td><?= ($kk['anggota_7_nik'] == null) ? '-' : $kk['anggota_7_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_7_nama']) == null) ? '-' : $kk['anggota_7_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_8_nik'] == null) ? '-' : '8'; ?></td>
            <td><?= ($kk['anggota_8_nik'] == null) ? '-' : $kk['anggota_8_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_8_nama']) == null) ? '-' : $kk['anggota_8_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_9_nik'] == null) ? '-' : '9'; ?></td>
            <td><?= ($kk['anggota_9_nik'] == null) ? '-' : $kk['anggota_9_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_9_nama']) == null) ? '-' : $kk['anggota_9_nama']; ?></td>
        </tr>
        <tr>
            <td><?= ($kk['anggota_10_nik'] == null) ? '-' : '10'; ?></td>
            <td><?= ($kk['anggota_10_nik'] == null) ? '-' : $kk['anggota_10_nik']; ?></td>
            <td><?= (strtoupper($kk['anggota_10_nama']) == null) ? '-' : $kk['anggota_10_nama']; ?></td>
        </tr>
    </table>
    <br>
    <p style="text-align: center;">Mengetahui</p>
    <table width="100%" style="text-align: center;">
        <tr>
            <td>Camat</td>
            <td height="100"></td>
            <td>Kepala Desa</td>
            <td>Pemohon</td>
        </tr>
        <tr>
            <td></td>
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
            <td><u><?= $kk['nama_lengkap']; ?></u></td>
        </tr>
    </table>
</body>
<script>
    window.print();
    window.onafterprint = window.close;
</script>

</html>