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
            <form action="/waris" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" id="id_user" name="id_user" value="<?= session()->get('id_user'); ?>">
                <input type="hidden" id="status" name="status" value="menunggu">
                <div class="card shadow-sm">
                    <a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-primary btn-block py-2 shadow-sm with-chevron">
                        <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Ketentuan dan Syarat</strong><i class="fa fa-angle-down"></i></p>
                    </a>
                    <div id="collapseExample1" class="collapse hidden">
                        <div class="card">
                            <div class="card-body">
                                <p><b>Persyaratan</b></p>
                                <ul>
                                    <li>Membawa fotocopy Kartu Keluarga (KK)</li>
                                    <li>Membawa surat Pengantar RT/RW</li>
                                    <li>Pernyataan Belum Pernah / Pernah Menikah (dari Kelurahan)</li>
                                    <li>Fotocopy KK</li>
                                    <li>Fotocopy KTP</li>
                                    <li>Fotocopy Akta Kelahiran</li>
                                    <li>Fotocopy Ijazah Terakhir</li>
                                    <li>Fotocopy Surat Nikah Orang Tua / Akte Cerai</li>
                                    <li>Fotocopy KK / KTP Pasangan</li>
                                    <li>Pas Foto 3x4 (2 Lembar)</li>
                                    <li>Pas Foto 3x4 Pasangan (2 Lembar)</li>
                                    <li>Bagi Calon Pengantin Perempuan Dengan Membawa Persyaratan Nikah Dari Pihak Laki-Laki (Boro Nikah)</li>
                                    <li>Bagi Calon Pengantin Status Janda/Duda Membawa Fotocopy Surat Cerai Mati / Cerai Hidup dan Membawa Yang Asli</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Tanggal Surat</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal Surat</label>
                                    <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggal'); ?>
                                    </div>
                                    <small id="tanggal_help" class="form-text text-muted">Waktu diterbitkannya surat. (Tanggal/Bulan/Tahun)</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Form</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nama_alm" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_alm')) ? 'is-invalid' : ''; ?>" id="nama_alm" name="nama_alm" placeholder="Masukan nama..." value="<?= old('nama_alm'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_alm'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir_alm" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir_alm')) ? 'is-invalid' : ''; ?>" id="tempat_lahir_alm" name="tempat_lahir_alm" placeholder="Masukan tempat lahir..." value="<?= old('tempat_lahir_alm'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir_alm'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_alm')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_alm" name="tanggal_lahir_alm" value="<?= old('tanggal_lahir_alm'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_alm'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_alm" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_alm')) ? 'is-invalid' : ''; ?>" id="pekerjaan_alm" name="pekerjaan_alm" placeholder="Masukan pekerjaan..." value="<?= old('pekerjaan_alm'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_alm'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_alm" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_alm')) ? 'is-invalid' : ''; ?>" id="alamat_alm" name="alamat_alm" rows="3" placeholder="Masukan tempat tinggal..."><?= old('alamat_alm'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_alm'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Form Ahli Waris</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nama_ahli" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_ahli')) ? 'is-invalid' : ''; ?>" id="nama_ahli" name="nama_ahli" placeholder="Masukan nama..." value="<?= old('nama_ahli'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_ahli'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir_ahli" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir_ahli')) ? 'is-invalid' : ''; ?>" id="tempat_lahir_ahli" name="tempat_lahir_ahli" placeholder="Masukan tempat lahir..." value="<?= old('tempat_lahir_ahli'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir_ahli'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_ahli')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_ahli" name="tanggal_lahir_ahli" value="<?= old('tanggal_lahir_ahli'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_ahli'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ahli" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ahli')) ? 'is-invalid' : ''; ?>" id="pekerjaan_ahli" name="pekerjaan_ahli" placeholder="Masukan pekerjaan..." value="<?= old('pekerjaan_ahli'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_ahli'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_ahli" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_ahli')) ? 'is-invalid' : ''; ?>" id="alamat_ahli" name="alamat_ahli" rows="3" placeholder="Masukan alamat..."><?= old('alamat_ahli'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_ahli'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">BUAT SURAT INI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Keterangan</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="keterangan_lain" class="col-sm-2 col-form-label">Keterangan Lain</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('keterangan_lain')) ? 'is-invalid' : ''; ?>" id="keterangan_lain" name="keterangan_lain" rows="3" placeholder="Masukan keterangan lain..."><?= old('keterangan_lain'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('keterangan_lain'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary">BUAT SURAT INI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>