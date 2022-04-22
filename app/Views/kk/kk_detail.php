<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Alert Message -->
    <div class="mt-3">
        <?= session()->getFlashdata('message'); ?>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <b>Detail Pemohon</b>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td style="width: 200px;"><b>Nama Lengkap</b></td>
                                <td style="width: 40px;">:</td>
                                <td><?= $kk['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK</b></td>
                                <td>:</td>
                                <td><?= $kk['nik']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nomor Kartu Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kk['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?= $kk['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td><b>RT</b></td>
                                <td>:</td>
                                <td><?= $kk['rt']; ?></td>
                            </tr>
                            <tr>
                                <td><b>RW</b></td>
                                <td>:</td>
                                <td><?= $kk['rw']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Desa</b></td>
                                <td>:</td>
                                <td><?= $kk['desa']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kecamatan</b></td>
                                <td>:</td>
                                <td><?= $kk['kecamatan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kabupaten</b></td>
                                <td>:</td>
                                <td><?= $kk['kabupaten']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Provinsi</b></td>
                                <td>:</td>
                                <td><?= $kk['provinsi']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alasan</b></td>
                                <td>:</td>
                                <td><?= $kk['alasan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jumlah Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kk['jumlah_keluarga']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Anggota 1</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_1_nik']; ?> • Nama : <?= $kk['anggota_1_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 2</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_2_nik']; ?> • Nama : <?= $kk['anggota_2_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 3</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_3_nik']; ?> • Nama : <?= $kk['anggota_3_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 4</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_4_nik']; ?> • Nama : <?= $kk['anggota_4_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 5</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_5_nik']; ?> • Nama : <?= $kk['anggota_5_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 6</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_6_nik']; ?> • Nama : <?= $kk['anggota_6_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 7</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_7_nik']; ?> • Nama : <?= $kk['anggota_7_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 8</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_8_nik']; ?> • Nama : <?= $kk['anggota_8_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 9</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_9_nik']; ?> • Nama : <?= $kk['anggota_9_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Anggota 10</b></td>
                                <td>:</td>
                                <td>NIK : <?= $kk['anggota_10_nik']; ?> • Nama : <?= $kk['anggota_10_nama']; ?> </td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($kk['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="" onclick="window.close();" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>