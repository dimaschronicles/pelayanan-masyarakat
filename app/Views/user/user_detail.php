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
                                <td style="width: 200px;"><b>NIK</b></td>
                                <td style="width: 40px;">:</td>
                                <td><?= $user['nik']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                <td>:</td>
                                <td><?= $user['nama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>:</td>
                                <td><?= $user['email']; ?></td>
                            </tr>
                            <tr>
                                <td><b>No. HP</b></td>
                                <td>:</td>
                                <td><?= $user['no_hp']; ?></td>
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