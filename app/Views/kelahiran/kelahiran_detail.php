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
                                <td style="width: 300px;"><b>No. Kepala Keluarga</b></td>
                                <td style="width: 40px;">:</td>
                                <td><?= $kelahiran['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Kepala Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_kepkel']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nomor Kepala Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['jk_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Dilahirkan Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['tempat_dilahirkan_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Lahir Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['tempat_lahir_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['tanggal_lahir_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pukul</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['pukul']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelahiran</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['jenis_kelahiran']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Kelahiran Ke-</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['kelahiran_ke']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Penolong Kelahiran</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['penolong_kelahiran']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Berat Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['berat_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Panjang Anak</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['panjang_anak']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK Ibu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nik_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Ibu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir Ibu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['tanggal_lahir_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Ibu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['umur_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Ibu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['pekerjaan_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Ibu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['alamat_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK Ayah</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nik_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Ayah</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir Ayah</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['tanggal_lahir_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Ayah</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['umur_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Ayah</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['pekerjaan_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Ayah</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['alamat_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK Pelapor</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nik_pelapor']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Pelapor</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_pelapor']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Pelapor</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['umur_pelapor']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin Pelapor</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['jk_pelapor']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Pelapor</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['pekerjaan_pelapor']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Pelapor</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['alamat_pelapor']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nik_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['umur_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['pekerjaan_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['alamat_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>NIK Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nik_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['nama_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['umur_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['pekerjaan_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kelahiran['alamat_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($kelahiran['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/surat_kelahiran" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>