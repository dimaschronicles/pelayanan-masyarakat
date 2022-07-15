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
                                <td><?= $sktm['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>:</td>
                                <td><?= $sktm['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat / Tanggal Lahir</b></td>
                                <td>:</td>
                                <td><?= $sktm['tempat_lahir']; ?>, <?= tgl_indo($sktm['tanggal_lahir']); ?></td>
                            </tr>
                            <tr>
                                <td><b>Warga Negara / Agama</b></td>
                                <td>:</td>
                                <td><?= $sktm['warga_negara']; ?>, <?= $sktm['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>No KTP / NIK</b></td>
                                <td>:</td>
                                <td><?= $sktm['nik']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>:</td>
                                <td><?= $sktm['pekerjaan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?= $sktm['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Keperluan</b></td>
                                <td>:</td>
                                <td><?= $sktm['keperluan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($sktm['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/surat_sktm" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>