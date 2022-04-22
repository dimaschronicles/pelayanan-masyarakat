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
                                <td><?= $waris['nama_alm']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat & Tanggal Lahir</b></td>
                                <td>:</td>
                                <td><?= $waris['tempat_lahir_alm']; ?>, <?= tgl_indo($waris['tanggal_lahir_alm']); ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>:</td>
                                <td><?= $waris['pekerjaan_alm']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?= $waris['alamat_alm']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Ahli Waris</b></td>
                                <td>:</td>
                                <td><?= $waris['nama_ahli']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat & Tanggal Lahir</b></td>
                                <td>:</td>
                                <td><?= $waris['tempat_lahir_ahli']; ?>, <?= tgl_indo($waris['tanggal_lahir_ahli']); ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>:</td>
                                <td><?= $waris['pekerjaan_ahli']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?= $waris['alamat_ahli']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($waris['tanggal']); ?></td>
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