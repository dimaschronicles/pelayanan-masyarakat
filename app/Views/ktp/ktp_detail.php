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
                                <td style="width: 200px;"><b>Jenis Permohonan</b></td>
                                <td style="width: 40px;">:</td>
                                <td><?= $ktp['jenis']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Lengkap</b></td>
                                <td>:</td>
                                <td><?= $ktp['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK</b></td>
                                <td>:</td>
                                <td><?= $ktp['nik']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nomor KK</b></td>
                                <td>:</td>
                                <td><?= $ktp['nomor_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?= $ktp['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td><b>RT</b></td>
                                <td>:</td>
                                <td><?= $ktp['rt']; ?></td>
                            </tr>
                            <tr>
                                <td><b>RW</b></td>
                                <td>:</td>
                                <td><?= $ktp['rw']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Dusun</b></td>
                                <td>:</td>
                                <td><?= $ktp['dusun']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($ktp['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/surat_ktp" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>