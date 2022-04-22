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
            <form action="/kematian" method="POST">
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
                                <b>Syarat-syarat yang diperlukan</b></p>
                                <ul>
                                    <li>Blanko/ data isian SKPD</li>
                                    <li>Surat pengantar RT/RW</li>
                                    <li>Melampirkan KK dan KTP asli yang bersangkutan</li>
                                    <li>Akta perkawinan bagi yang sudah menikah</li>
                                    <li>Fotcopy Akta kelahiran</li>
                                    <li>Pas foto berwarna 4 x 6 sebanyak 7 lembar</li>
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
                        <b>Kartu Keluarga</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama_kepkel">Nama Kepala Keluarga</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_kepkel')) ? 'is-invalid' : ''; ?>" id="nama_kepkel" name="nama_kepkel" placeholder="Masukan nama kepala keluarga..." value="<?= old('nama_kepkel'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_kepkel'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="no_kk">No. Kartu Keluarga</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('no_kk')) ? 'is-invalid' : ''; ?>" id="no_kk" name="no_kk" placeholder="Masukan nomor kepala keluarga..." value="<?= old('no_kk'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('no_kk'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Anak -->
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Biodata Jenazah</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nik_jenazah" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nik_jenazah')) ? 'is-invalid' : ''; ?>" id="nik_jenazah" name="nik_jenazah" placeholder="Masukan nik jenazah..." value="<?= old('nik_jenazah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_jenazah" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_jenazah')) ? 'is-invalid' : ''; ?>" id="nama_jenazah" name="nama_jenazah" placeholder="Masukan nama jenazah..." value="<?= old('nama_jenazah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk_jenazah" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('jk_jenazah')) ? 'is-invalid' : ''; ?>" id="jk_jenazah" name="jk_jenazah">
                                            <option value="">== Pilih Jenis Kelamin ==</option>
                                            <option value="Laki-laki" <?= (old('jk_jenazah') == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= (old('jk_jenazah') == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jk_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="umur_jenazah" class="col-sm-2 col-form-label">Umur</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_jenazah')) ? 'is-invalid' : ''; ?>" id="umur_jenazah" name="umur_jenazah" placeholder="Masukan umur jenazah..." value="<?= old('umur_jenazah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir_jenazah" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir_jenazah')) ? 'is-invalid' : ''; ?>" id="tempat_lahir_jenazah" name="tempat_lahir_jenazah" placeholder="Masukan tempat lahir jenazah..." value="<?= old('tempat_lahir_jenazah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir_jenazah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_jenazah')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_jenazah" name="tanggal_lahir_jenazah" value="<?= old('tanggal_lahir_jenazah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('agama')) ? 'is-invalid' : ''; ?>" id="agama" name="agama">
                                            <option value="">== Pilih Agama ==</option>
                                            <option value="Islam" <?= (old('agama') == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                            <option value="Kristen" <?= (old('agama') == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                                            <option value="Katolik" <?= (old('agama') == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                            <option value="Hindu" <?= (old('agama') == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                            <option value="Budha" <?= (old('agama') == 'Budha') ? 'selected' : ''; ?>>Budha</option>
                                            <option value="Konghucu" <?= (old('agama') == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                            <option value="Kepercayaan" <?= (old('agama') == 'Kepercayaan') ? 'selected' : ''; ?>>Kepercayaan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('agama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_jenazah" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_jenazah')) ? 'is-invalid' : ''; ?>" id="pekerjaan_jenazah" name="pekerjaan_jenazah" placeholder="Masukan pekerjaan jenazah..." value="<?= old('pekerjaan_jenazah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_jenazah" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_jenazah')) ? 'is-invalid' : ''; ?>" id="alamat_jenazah" name="alamat_jenazah" rows="3" placeholder="Masukan alamat jenazah..."><?= old('alamat_jenazah'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_jenazah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="desa_jenazah">Desa/Kelurahan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa_jenazah')) ? 'is-invalid' : ''; ?>" id="desa_jenazah" name="desa_jenazah" placeholder="Masukan desa..." value="<?= old('desa_jenazah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa_jenazah'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="kecamatan_jenazah">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_jenazah')) ? 'is-invalid' : ''; ?>" id="kecamatan_jenazah" name="kecamatan_jenazah" placeholder="Masukan kecamatan..." value="<?= old('kecamatan_jenazah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan_jenazah'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="kabupaten_jenazah">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_jenazah')) ? 'is-invalid' : ''; ?>" id="kabupaten_jenazah" name="kabupaten_jenazah" placeholder="Masukan kabupaten..." value="<?= old('kabupaten_jenazah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten_jenazah'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi_jenazah">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_jenazah')) ? 'is-invalid' : ''; ?>" id="provinsi_jenazah" name="provinsi_jenazah" placeholder="Masukan provinsi..." value="<?= old('provinsi_jenazah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi_jenazah'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anak_ke" class="col-sm-2 col-form-label">Anak Ke</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('anak_ke')) ? 'is-invalid' : ''; ?>" id="anak_ke" name="anak_ke" placeholder="Masukan anak ke..." value="<?= old('anak_ke'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anak_ke'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_kematian" class="col-sm-2 col-form-label">Tanggal Kematian</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_kematian')) ? 'is-invalid' : ''; ?>" id="tanggal_kematian" name="tanggal_kematian" value="<?= old('tanggal_kematian'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_kematian'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pukul" class="col-sm-2 col-form-label">Pukul</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control <?= ($validation->hasError('pukul')) ? 'is-invalid' : ''; ?>" id="pukul" name="pukul" value="<?= old('pukul'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pukul'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sebab_kematian" class="col-sm-2 col-form-label">Sebab Kematian</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('sebab_kematian')) ? 'is-invalid' : ''; ?>" id="sebab_kematian" name="sebab_kematian">
                                            <option value="">== Pilih Sebab Kematian ==</option>
                                            <option value="Sakit biasa/tua" <?= (old('sebab_kematian') == 'Sakit biasa/tua') ? 'selected' : ''; ?>>Sakit biasa/tua</option>
                                            <option value="Wabah Penyakit" <?= (old('sebab_kematian') == 'Wabah Penyakit') ? 'selected' : ''; ?>>Wabah Penyakit</option>
                                            <option value="Kecelakaan" <?= (old('sebab_kematian') == 'Kecelakaan') ? 'selected' : ''; ?>>Kecelakaan</option>
                                            <option value="Kriminalitas" <?= (old('sebab_kematian') == 'Kriminalitas') ? 'selected' : ''; ?>>Kriminalitas</option>
                                            <option value="Bunuh Diri" <?= (old('sebab_kematian') == 'Bunuh Diri') ? 'selected' : ''; ?>>Bunuh Diri</option>
                                            <option value="Lainnya" <?= (old('sebab_kematian') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('sebab_kematian'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_kematian" class="col-sm-2 col-form-label">Tempat Kematian</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_kematian')) ? 'is-invalid' : ''; ?>" id="tempat_kematian" name="tempat_kematian" placeholder="Masukan tempat kematian..." value="<?= old('tempat_kematian'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_kematian'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="yang_menyatakan" class="col-sm-2 col-form-label">Yang Menyatakan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('yang_menyatakan')) ? 'is-invalid' : ''; ?>" id="yang_menyatakan" name="yang_menyatakan">
                                            <option value="">== Pilih Yang Menyatakan ==</option>
                                            <option value="Dokter" <?= (old('yang_menyatakan') == 'Dokter') ? 'selected' : ''; ?>>Dokter</option>
                                            <option value="Bidan/Perawat" <?= (old('yang_menyatakan') == 'Bidan/Perawat') ? 'selected' : ''; ?>>Bidan/Perawat</option>
                                            <option value="Tenaga Kesehatan" <?= (old('yang_menyatakan') == 'Tenaga Kesehatan') ? 'selected' : ''; ?>>Tenaga Kesehatan</option>
                                            <option value="Kepolisian" <?= (old('yang_menyatakan') == 'Kepolisian') ? 'selected' : ''; ?>>Kepolisian</option>
                                            <option value="Lainnya" <?= (old('yang_menyatakan') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('yang_menyatakan'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ayah -->
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Biodata Ayah</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nik_ayah" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_ayah')) ? 'is-invalid' : ''; ?>" id="nik_ayah" name="nik_ayah" placeholder="Masukan nik ayah..." value="<?= old('nik_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ayah" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" id="nama_ayah" name="nama_ayah" placeholder="Masukan lengkap ayah..." value="<?= old('nama_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir_ayah" class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_ayah')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_ayah" name="tanggal_lahir_ayah" placeholder="Masukan tempat lahir..." value="<?= old('tanggal_lahir_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_ayah'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_ayah')) ? 'is-invalid' : ''; ?>" id="umur_ayah" name="umur_ayah" placeholder="Masukan umur ayah..." value="<?= old('umur_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ayah')) ? 'is-invalid' : ''; ?>" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukan pekerjaan ayah..." value="<?= old('pekerjaan_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_ayah" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_ayah')) ? 'is-invalid' : ''; ?>" id="alamat_ayah" name="alamat_ayah" rows="3" placeholder="Masukan alamat ayah..."><?= old('alamat_ayah'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="desa_ayah">Desa/Kelurahan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa_ayah')) ? 'is-invalid' : ''; ?>" id="desa_ayah" name="desa_ayah" placeholder="Masukan desa..." value="<?= old('desa_ayah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa_ayah'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="kecamatan_ayah">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_ayah')) ? 'is-invalid' : ''; ?>" id="kecamatan_ayah" name="kecamatan_ayah" placeholder="Masukan kecamatan..." value="<?= old('kecamatan_ayah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan_ayah'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="kabupaten_ayah">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_ayah')) ? 'is-invalid' : ''; ?>" id="kabupaten_ayah" name="kabupaten_ayah" placeholder="Masukan kabupaten..." value="<?= old('kabupaten_ayah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten_ayah'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi_ayah">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_ayah')) ? 'is-invalid' : ''; ?>" id="provinsi_ayah" name="provinsi_ayah" placeholder="Masukan provinsi..." value="<?= old('provinsi_ayah'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi_ayah'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ibu -->
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Biodata Ibu</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nik_ibu" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_ibu')) ? 'is-invalid' : ''; ?>" id="nik_ibu" name="nik_ibu" placeholder="Masukan nik ibu..." value="<?= old('nik_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_ibu')) ? 'is-invalid' : ''; ?>" id="nama_ibu" name="nama_ibu" placeholder="Masukan lengkap ibu..." value="<?= old('nama_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir_ibu" class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_ibu')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" placeholder="Masukan tempat lahir..." value="<?= old('tanggal_lahir_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_ibu'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_ibu')) ? 'is-invalid' : ''; ?>" id="umur_ibu" name="umur_ibu" placeholder="Masukan umur ibu..." value="<?= old('umur_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_ibu')) ? 'is-invalid' : ''; ?>" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Masukan pekerjaan ibu..." value="<?= old('pekerjaan_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_ibu" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_ibu')) ? 'is-invalid' : ''; ?>" id="alamat_ibu" name="alamat_ibu" rows="3" placeholder="Masukan alamat ibu..."><?= old('alamat_ibu'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="desa_ibu">Desa/Kelurahan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa_ibu')) ? 'is-invalid' : ''; ?>" id="desa_ibu" name="desa_ibu" placeholder="Masukan desa..." value="<?= old('desa_ibu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa_ibu'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="kecamatan_ibu">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_ibu')) ? 'is-invalid' : ''; ?>" id="kecamatan_ibu" name="kecamatan_ibu" placeholder="Masukan kecamatan..." value="<?= old('kecamatan_ibu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan_ibu'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="kabupaten_ibu">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_ibu')) ? 'is-invalid' : ''; ?>" id="kabupaten_ibu" name="kabupaten_ibu" placeholder="Masukan kabupaten..." value="<?= old('kabupaten_ibu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten_ibu'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi_ibu">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_ibu')) ? 'is-invalid' : ''; ?>" id="provinsi_ibu" name="provinsi_ibu" placeholder="Masukan provinsi..." value="<?= old('provinsi_ibu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi_ibu'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pelapor -->
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Biodata Pelapor</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nik_pelapor" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_pelapor')) ? 'is-invalid' : ''; ?>" id="nik_pelapor" name="nik_pelapor" placeholder="Masukan nik pelapor..." value="<?= old('nik_pelapor'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_pelapor'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_pelapor')) ? 'is-invalid' : ''; ?>" id="nama_pelapor" name="nama_pelapor" placeholder="Masukan lengkap pelapor..." value="<?= old('nama_pelapor'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_pelapor'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir_pelapor" class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_pelapor')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_pelapor" name="tanggal_lahir_pelapor" placeholder="Masukan tempat lahir..." value="<?= old('tanggal_lahir_pelapor'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_pelapor'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_pelapor')) ? 'is-invalid' : ''; ?>" id="umur_pelapor" name="umur_pelapor" placeholder="Masukan umur pelapor..." value="<?= old('umur_pelapor'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_pelapor'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_pelapor" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_pelapor')) ? 'is-invalid' : ''; ?>" id="pekerjaan_pelapor" name="pekerjaan_pelapor" placeholder="Masukan pekerjaan pelapor..." value="<?= old('pekerjaan_pelapor'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_pelapor'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_pelapor" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_pelapor')) ? 'is-invalid' : ''; ?>" id="alamat_pelapor" name="alamat_pelapor" rows="3" placeholder="Masukan alamat pelapor..."><?= old('alamat_pelapor'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_pelapor'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="desa_pelapor">Desa/Kelurahan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa_pelapor')) ? 'is-invalid' : ''; ?>" id="desa_pelapor" name="desa_pelapor" placeholder="Masukan desa..." value="<?= old('desa_pelapor'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa_pelapor'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="kecamatan_pelapor">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_pelapor')) ? 'is-invalid' : ''; ?>" id="kecamatan_pelapor" name="kecamatan_pelapor" placeholder="Masukan kecamatan..." value="<?= old('kecamatan_pelapor'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan_pelapor'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="kabupaten_pelapor">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_pelapor')) ? 'is-invalid' : ''; ?>" id="kabupaten_pelapor" name="kabupaten_pelapor" placeholder="Masukan kabupaten..." value="<?= old('kabupaten_pelapor'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten_pelapor'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi_pelapor">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_pelapor')) ? 'is-invalid' : ''; ?>" id="provinsi_pelapor" name="provinsi_pelapor" placeholder="Masukan provinsi..." value="<?= old('provinsi_pelapor'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi_pelapor'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Saksi Satu -->
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Biodata Saksi 1</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nik_saksi_satu" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_saksi_satu')) ? 'is-invalid' : ''; ?>" id="nik_saksi_satu" name="nik_saksi_satu" placeholder="Masukan nik saksi_satu..." value="<?= old('nik_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_saksi_satu" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_saksi_satu')) ? 'is-invalid' : ''; ?>" id="nama_saksi_satu" name="nama_saksi_satu" placeholder="Masukan lengkap saksi_satu..." value="<?= old('nama_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lhr_saksi_satu" class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tgl_lhr_saksi_satu')) ? 'is-invalid' : ''; ?>" id="tgl_lhr_saksi_satu" name="tgl_lhr_saksi_satu" placeholder="Masukan tempat lahir..." value="<?= old('tgl_lhr_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tgl_lhr_saksi_satu'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_saksi_satu')) ? 'is-invalid' : ''; ?>" id="umur_saksi_satu" name="umur_saksi_satu" placeholder="Masukan umur saksi_satu..." value="<?= old('umur_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_saksi_satu" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_saksi_satu')) ? 'is-invalid' : ''; ?>" id="pekerjaan_saksi_satu" name="pekerjaan_saksi_satu" placeholder="Masukan pekerjaan saksi_satu..." value="<?= old('pekerjaan_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_saksi_satu" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_saksi_satu')) ? 'is-invalid' : ''; ?>" id="alamat_saksi_satu" name="alamat_saksi_satu" rows="3" placeholder="Masukan alamat saksi_satu..."><?= old('alamat_saksi_satu'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="desa_saksi_satu">Desa/Kelurahan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa_saksi_satu')) ? 'is-invalid' : ''; ?>" id="desa_saksi_satu" name="desa_saksi_satu" placeholder="Masukan desa..." value="<?= old('desa_saksi_satu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa_saksi_satu'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="kecamatan_saksi_satu">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_saksi_satu')) ? 'is-invalid' : ''; ?>" id="kecamatan_saksi_satu" name="kecamatan_saksi_satu" placeholder="Masukan kecamatan..." value="<?= old('kecamatan_saksi_satu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan_saksi_satu'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="kabupaten_saksi_satu">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_saksi_satu')) ? 'is-invalid' : ''; ?>" id="kabupaten_saksi_satu" name="kabupaten_saksi_satu" placeholder="Masukan kabupaten..." value="<?= old('kabupaten_saksi_satu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten_saksi_satu'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi_saksi_satu">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_saksi_satu')) ? 'is-invalid' : ''; ?>" id="provinsi_saksi_satu" name="provinsi_saksi_satu" placeholder="Masukan provinsi..." value="<?= old('provinsi_saksi_satu'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi_saksi_satu'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Saksi Dua -->
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Biodata Saksi 2</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nik_saksi_dua" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_saksi_dua')) ? 'is-invalid' : ''; ?>" id="nik_saksi_dua" name="nik_saksi_dua" placeholder="Masukan nik saksi_dua..." value="<?= old('nik_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_saksi_dua" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_saksi_dua')) ? 'is-invalid' : ''; ?>" id="nama_saksi_dua" name="nama_saksi_dua" placeholder="Masukan lengkap saksi_dua..." value="<?= old('nama_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lhr_saksi_dua" class="col-sm-2 col-form-label">Tanggal Lahir / Umur</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control <?= ($validation->hasError('tgl_lhr_saksi_dua')) ? 'is-invalid' : ''; ?>" id="tgl_lhr_saksi_dua" name="tgl_lhr_saksi_dua" placeholder="Masukan tempat lahir..." value="<?= old('tgl_lhr_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tgl_lhr_saksi_dua'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_saksi_dua')) ? 'is-invalid' : ''; ?>" id="umur_saksi_dua" name="umur_saksi_dua" placeholder="Masukan umur saksi_dua..." value="<?= old('umur_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_saksi_dua" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_saksi_dua')) ? 'is-invalid' : ''; ?>" id="pekerjaan_saksi_dua" name="pekerjaan_saksi_dua" placeholder="Masukan pekerjaan saksi_dua..." value="<?= old('pekerjaan_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_saksi_dua" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_saksi_dua')) ? 'is-invalid' : ''; ?>" id="alamat_saksi_dua" name="alamat_saksi_dua" rows="3" placeholder="Masukan alamat saksi_dua..."><?= old('alamat_saksi_dua'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="desa_saksi_dua">Desa/Kelurahan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa_saksi_dua')) ? 'is-invalid' : ''; ?>" id="desa_saksi_dua" name="desa_saksi_dua" placeholder="Masukan desa..." value="<?= old('desa_saksi_dua'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa_saksi_dua'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="kecamatan_saksi_dua">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan_saksi_dua')) ? 'is-invalid' : ''; ?>" id="kecamatan_saksi_dua" name="kecamatan_saksi_dua" placeholder="Masukan kecamatan..." value="<?= old('kecamatan_saksi_dua'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan_saksi_dua'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="kabupaten_saksi_dua">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten_saksi_dua')) ? 'is-invalid' : ''; ?>" id="kabupaten_saksi_dua" name="kabupaten_saksi_dua" placeholder="Masukan kabupaten..." value="<?= old('kabupaten_saksi_dua'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten_saksi_dua'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi_saksi_dua">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi_saksi_dua')) ? 'is-invalid' : ''; ?>" id="provinsi_saksi_dua" name="provinsi_saksi_dua" placeholder="Masukan provinsi..." value="<?= old('provinsi_saksi_dua'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi_saksi_dua'); ?>
                                                </div>
                                            </div>
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