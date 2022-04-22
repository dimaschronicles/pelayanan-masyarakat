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
                                <td style="width: 200px;"><b>No. Kepala Keluarga</b></td>
                                <td style="width: 40px;">:</td>
                                <td><?= $kelahiran['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Kepala Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_kepkel']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($kelahiran['tanggal']); ?></td>
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