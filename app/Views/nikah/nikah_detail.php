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
                                <td><?= $nikah['nama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>:</td>
                                <td><?= $nikah['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat & Tanggal Lahir</b></td>
                                <td>:</td>
                                <td><?= $nikah['tempat_lahir']; ?>, <?= tgl_indo($nikah['tanggal_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td><b>Warga Negara</b></td>
                                <td>:</td>
                                <td><?= $nikah['warga_negara']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>:</td>
                                <td><?= $nikah['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Tinggal</b></td>
                                <td>:</td>
                                <td><?= $nikah['tempat_tinggal']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Surat Bukti Diri</b></td>
                                <td>:</td>
                                <td><b>NIK</b> : <?= $nikah['nik']; ?> | <b>No KK</b> : <?= $nikah['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Keperluan</b></td>
                                <td>:</td>
                                <td><?= $nikah['keperluan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Berlaku</b></td>
                                <td>:</td>
                                <?php $tgl = date('Y-m-d', strtotime($nikah['berlaku'] . '+3 day'));  ?>
                                <td><?= tgl_indo($nikah['berlaku']); ?> s/d <?= tgl_indo($tgl); ?> </td>
                            </tr>
                            <tr>
                                <td><b>Keterangan Lain</b></td>
                                <td>:</td>
                                <td><?= $nikah['keterangan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($nikah['tanggal']); ?></td>
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