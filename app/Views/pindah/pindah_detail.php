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
                                <td><?= $pindah['nik']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Lengkap</b></td>
                                <td>:</td>
                                <td><?= $pindah['nama_lengkap']; ?></td>
                            </tr>
                            <tr>
                                <td><b>No KK</b></td>
                                <td>:</td>
                                <td><?= $pindah['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Kepala Keluarga</b></td>
                                <td>:</td>
                                <td><?= $pindah['nama_kepkel']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Sekarang</b></td>
                                <td>:</td>
                                <td><?= $pindah['alamat_sekarang']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Tujuan</b></td>
                                <td>:</td>
                                <td><?= $pindah['alamat_tujuan']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jumlah Keluarga</b></td>
                                <td>:</td>
                                <td><?= $pindah['jumlah_keluarga']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($pindah['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/surat_pindah" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>