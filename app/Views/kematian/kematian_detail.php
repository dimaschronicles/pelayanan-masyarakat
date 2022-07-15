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
                                <td><?= $kematian['no_kk']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Kepala Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kematian['nama_kepkel']; ?></td>
                            </tr>
                            <tr>
                                <td><b>No Kepala Keluarga</b></td>
                                <td>:</td>
                                <td><?= $kematian['no_kk']; ?></td>
                            </tr>
                            <!-- jenazah -->
                            <tr>
                                <td><b>NIK Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['nik_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['nama_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['jk_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['umur_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Lahir Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['tempat_lahir_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['tanggal_lahir_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>:</td>
                                <td><?= $kematian['agama']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['pekerjaan_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Jenazah</b></td>
                                <td>:</td>
                                <td><?= $kematian['alamat_jenazah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Anak Ke</b></td>
                                <td>:</td>
                                <td><?= $kematian['anak_ke']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pukul</b></td>
                                <td>:</td>
                                <td><?= $kematian['pukul']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Kematian</b></td>
                                <td>:</td>
                                <td><?= $kematian['tanggal_kematian']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Sebab Kematian</b></td>
                                <td>:</td>
                                <td><?= $kematian['sebab_kematian']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tempat Kematian</b></td>
                                <td>:</td>
                                <td><?= $kematian['tempat_kematian']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Yang Menyatakan</b></td>
                                <td>:</td>
                                <td><?= $kematian['yang_menyatakan']; ?></td>
                            </tr>
                            <!-- ibu -->
                            <tr>
                                <td><b>NIK Ibu</b></td>
                                <td>:</td>
                                <td><?= $kematian['nik_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Ibu</b></td>
                                <td>:</td>
                                <td><?= $kematian['nama_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Ibu</b></td>
                                <td>:</td>
                                <td><?= $kematian['umur_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Ibu</b></td>
                                <td>:</td>
                                <td><?= $kematian['pekerjaan_ibu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Ibu</b></td>
                                <td>:</td>
                                <td><?= $kematian['alamat_ibu']; ?></td>
                            </tr>
                            <!-- ayah -->
                            <tr>
                                <td><b>NIK Ayah</b></td>
                                <td>:</td>
                                <td><?= $kematian['nik_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Ayah</b></td>
                                <td>:</td>
                                <td><?= $kematian['nama_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Ayah</b></td>
                                <td>:</td>
                                <td><?= $kematian['umur_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Ayah</b></td>
                                <td>:</td>
                                <td><?= $kematian['pekerjaan_ayah']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Ayah</b></td>
                                <td>:</td>
                                <td><?= $kematian['alamat_ayah']; ?></td>
                            </tr>
                            <!-- saksi satu -->
                            <tr>
                                <td><b>NIK Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kematian['nik_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kematian['nama_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kematian['tgl_lhr_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kematian['umur_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kematian['pekerjaan_saksi_satu']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Saksi Satu</b></td>
                                <td>:</td>
                                <td><?= $kematian['alamat_saksi_satu']; ?></td>
                            </tr>
                            <!-- saksi dua  -->
                            <tr>
                                <td><b>NIK Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kematian['nik_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Nama Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kematian['nama_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kematian['tgl_lhr_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Umur Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kematian['umur_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kematian['pekerjaan_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Alamat Saksi Dua</b></td>
                                <td>:</td>
                                <td><?= $kematian['alamat_saksi_dua']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Permohonan</b></td>
                                <td>:</td>
                                <td><?= tgl_indo($kematian['tanggal']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="/surat_kematian" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>