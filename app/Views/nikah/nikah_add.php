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
            <form action="/pengantarnikah" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" id="id_user" name="id_user" value="<?= session()->get('id_user'); ?>">
                <input type="hidden" id="status" name="status" value="menunggu">
                <input type="hidden" id="berlaku" name="berlaku" value="<?= date('Y-m-d'); ?>">
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
                        <b>Isi Surat</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan nama lengkap..." value="<?= old('nama_lengkap'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_lengkap'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">== Pilih Jenis Kelamin ==</option>
                                            <option value="Laki-laki" <?= (old('jenis_kelamin') == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= (old('jenis_kelamin') == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jenis_kelamin'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan tempat lahir..." value="<?= old('tempat_lahir'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir" name="tanggal_lahir" value="<?= old('tanggal_lahir'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara / Agama</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('warga_negara')) ? 'is-invalid' : ''; ?>" id="warga_negara" name="warga_negara" placeholder="Masukan warga negara..." value="<?= old('warga_negara'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('warga_negara'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <select class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" id="agama" name="agama">
                                            <option value="">== Pilih Agama ==</option>
                                            <option value="Islam" <?= (old('agama') == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                            <option value="Kristen" <?= (old('agama') == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                                            <option value="Katolik" <?= (old('agama') == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                            <option value="Hindu" <?= (old('agama') == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                            <option value="Buddha" <?= (old('agama') == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                                            <option value="Konghucu" <?= (old('agama') == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('agama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="surat_bukti" class="col-sm-2 col-form-label">Surat Bukti Diri</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">NIK</span>
                                            </div>
                                            <input type="number" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" placeholder="Masukan NIK..." id="nik" name="nik" value="<?= old('nik'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('nik'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">No. KK</span>
                                            </div>
                                            <input type="number" class="form-control <?= ($validation->hasError('no_kk')) ? 'is-invalid' : ''; ?>" placeholder="Masukan No. KK..." id="no_kk" name="no_kk" value="<?= old('no_kk'); ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('no_kk'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" id="pekerjaan" name="pekerjaan" placeholder="Masukan pekerjaan..." value="<?= old('pekerjaan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('tempat_tinggal')) ? 'is-invalid' : ''; ?>" id="tempat_tinggal" name="tempat_tinggal" rows="3" placeholder="Masukan tempat tinggal..."><?= old('tempat_tinggal'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_tinggal'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keperluan" class="col-sm-2 col-form-label">Keperluan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('keperluan')) ? 'is-invalid' : ''; ?>" id="keperluan" name="keperluan" placeholder="Masukan keperluan... (Contoh: Beasiswa)" value="<?= old('keperluan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('keperluan'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan Lain</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id="keterangan" name="keterangan" rows="3" placeholder="Masukan keterangan lain..."><?= old('keterangan'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('keterangan'); ?>
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
            </form>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>