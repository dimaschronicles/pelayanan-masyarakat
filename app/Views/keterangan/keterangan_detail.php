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
                                <td style="width: 200px;"><b>Nama</b></td>
                                <td style="width: 40px;">:</td>
                                <td><?= $keterangan['nama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>:</td>
                                <td><?= $keterangan['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat & Tanggal Lahir</b></td>
                                <td>:</td>
                                <td><?= $keterangan['tempat_lahir']; ?>, <?= tgl_indo($keterangan['tanggal_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td><b>Warga Negara</b></td>
                                <td>:</td>
                                <td><?= $keterangan['warga_negara']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>:</td>
                                <td><?= $keterangan['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Tinggal</b></td>
                                <td>:</td>
                                <td><?= $keterangan['tempat_tinggal']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Surat Bukti Diri</b></td>
                                <td>:</td>
                                <td><b>NIK</b> : <?= $keterangan['bukti_nik']; ?> | <b>No KK</b> : <?= $keterangan['bukti_no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Keperluan</b></td>
                                <td>:</td>
                                <td><?= $keterangan['keperluan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Berlaku</b></td>
                                <td>:</td>
                                <?php $tgl = date('Y-m-d', strtotime($keterangan['tanggal'] . '+30 day'));  ?>
                                <td><?= tgl_indo($keterangan['tanggal']); ?> s/d <?= tgl_indo($tgl); ?> </td>
                            </tr>
                            <tr>
                                <td><b>Keterangan Lain</b></td>
                                <td>:</td>
                                <td><?= $keterangan['keterangan_lain']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($keterangan['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/surat_keterangan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>