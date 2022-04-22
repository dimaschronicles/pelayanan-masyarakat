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
            <form action="/kelahiran" method="POST">
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
                        <b>Biodata Bayi/Anak</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="nama_anak" class="col-sm-2 col-form-label">Nama Anak</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_anak')) ? 'is-invalid' : ''; ?>" id="nama_anak" name="nama_anak" placeholder="Masukan nama anak..." value="<?= old('nama_anak'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_anak'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk_anak" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('jk_anak')) ? 'is-invalid' : ''; ?>" id="jk_anak" name="jk_anak">
                                            <option value="">== Pilih Jenis Kelamin ==</option>
                                            <option value="Laki-laki" <?= (old('jk_anak') == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= (old('jk_anak') == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jk_anak'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_dilahirkan_anak" class="col-sm-2 col-form-label">Tempat Dilahirkan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('tempat_dilahirkan_anak')) ? 'is-invalid' : ''; ?>" id="tempat_dilahirkan_anak" name="tempat_dilahirkan_anak">
                                            <option value="">== Pilih Tempat Dilahirkan ==</option>
                                            <option value="RS/RB" <?= (old('tempat_dilahirkan_anak') == 'RS/RB') ? 'selected' : ''; ?>>RS/RB</option>
                                            <option value="Puskesmas" <?= (old('tempat_dilahirkan_anak') == 'Puskesmas') ? 'selected' : ''; ?>>Puskesmas</option>
                                            <option value="Polindes" <?= (old('tempat_dilahirkan_anak') == 'Polindes') ? 'selected' : ''; ?>>Polindes</option>
                                            <option value="Rumah" <?= (old('tempat_dilahirkan_anak') == 'Rumah') ? 'selected' : ''; ?>>Rumah</option>
                                            <option value="Lainnya" <?= (old('tempat_dilahirkan_anak') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_dilahirkan_anak'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_lahir_anak" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('tempat_lahir_anak')) ? 'is-invalid' : ''; ?>" id="tempat_lahir_anak" name="tempat_lahir_anak" placeholder="Masukan tempat lahir anak..." value="<?= old('tempat_lahir_anak'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tempat_lahir_anak'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tanggal_lahir_anak" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= ($validation->hasError('tanggal_lahir_anak')) ? 'is-invalid' : ''; ?>" id="tanggal_lahir_anak" name="tanggal_lahir_anak" placeholder="Masukan tempat lahir anak..." value="<?= old('tanggal_lahir_anak'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tanggal_lahir_anak'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pukul" class="col-sm-2 col-form-label">Pukul</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control <?= ($validation->hasError('pukul')) ? 'is-invalid' : ''; ?>" id="pukul" name="pukul" placeholder="Masukan tempat lahir anak..." value="<?= old('pukul'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pukul'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis_kelahiran" class="col-sm-2 col-form-label">Jenis Kelahiran</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('jenis_kelahiran')) ? 'is-invalid' : ''; ?>" id="jenis_kelahiran" name="jenis_kelahiran">
                                            <option value="">== Pilih Jenis Kelahiran ==</option>
                                            <option value="Tunggal" <?= (old('jenis_kelahiran') == 'Tunggal') ? 'selected' : ''; ?>>Tunggal</option>
                                            <option value="Kembar 2" <?= (old('jenis_kelahiran') == 'Kembar 2') ? 'selected' : ''; ?>>Kembar 2</option>
                                            <option value="Kembar 3" <?= (old('jenis_kelahiran') == 'Kembar 3') ? 'selected' : ''; ?>>Kembar 3</option>
                                            <option value="Kembar 4" <?= (old('jenis_kelahiran') == 'Kembar 4') ? 'selected' : ''; ?>>Kembar 4</option>
                                            <option value="Lainnya" <?= (old('jenis_kelahiran') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jenis_kelahiran'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kelahiran_ke" class="col-sm-2 col-form-label">Kelahiran Ke</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('kelahiran_ke')) ? 'is-invalid' : ''; ?>" id="kelahiran_ke" name="kelahiran_ke" placeholder="Masukan kelahiran ke..." value="<?= old('kelahiran_ke'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kelahiran_ke'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="penolong_kelahiran" class="col-sm-2 col-form-label">Penolong Kelahiran</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('penolong_kelahiran')) ? 'is-invalid' : ''; ?>" id="penolong_kelahiran" name="penolong_kelahiran">
                                            <option value="">== Pilih Penolong Kelahiran ==</option>
                                            <option value="Dokter" <?= (old('penolong_kelahiran') == 'Dokter') ? 'selected' : ''; ?>>Dokter</option>
                                            <option value="Bidan/Perawat" <?= (old('penolong_kelahiran') == 'Bidan/Perawat') ? 'selected' : ''; ?>>Bidan/Perawat</option>
                                            <option value="Dukun" <?= (old('penolong_kelahiran') == 'Dukun') ? 'selected' : ''; ?>>Dukun</option>
                                            <option value="Lainnya" <?= (old('penolong_kelahiran') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('penolong_kelahiran'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat_anak" class="col-sm-2 col-form-label">Berat Bayi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('berat_anak')) ? 'is-invalid' : ''; ?>" id="berat_anak" name="berat_anak" placeholder="Masukan berat bayi/anak..." value="<?= old('berat_anak'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('berat_anak'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="panjang_anak" class="col-sm-2 col-form-label">Panjang Bayi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('panjang_anak')) ? 'is-invalid' : ''; ?>" id="panjang_anak" name="panjang_anak" placeholder="Masukan panjang bayi/anak..." value="<?= old('panjang_anak'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('panjang_anak'); ?>
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
                                <div class="form-group row">
                                    <label for="warga_negara_ibu" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('warga_negara_ibu')) ? 'is-invalid' : ''; ?>" id="warga_negara_ibu" name="warga_negara_ibu">
                                            <option value="">== Pilih Kewarganegaraan ==</option>
                                            <option value="WNI" <?= (old('warga_negara_ibu') == 'WNI') ? 'selected' : ''; ?>>WNI</option>
                                            <option value="WNA" <?= (old('warga_negara_ibu') == 'WNA') ? 'selected' : ''; ?>>WNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('warga_negara_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kebangsaan_ibu" class="col-sm-2 col-form-label">Kebangsaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('kebangsaan_ibu')) ? 'is-invalid' : ''; ?>" id="kebangsaan_ibu" name="kebangsaan_ibu" placeholder="Masukan kebangsaan..." value="<?= old('kebangsaan_ibu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kebangsaan_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_pencatatan_perkawinan" class="col-sm-2 col-form-label">Tgl Pencatatan Perkawinan</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control <?= ($validation->hasError('tgl_pencatatan_perkawinan')) ? 'is-invalid' : ''; ?>" id="tgl_pencatatan_perkawinan" name="tgl_pencatatan_perkawinan" value="<?= old('tgl_pencatatan_perkawinan'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tgl_pencatatan_perkawinan'); ?>
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
                                <div class="form-group row">
                                    <label for="warga_negara_ayah" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('warga_negara_ayah')) ? 'is-invalid' : ''; ?>" id="warga_negara_ayah" name="warga_negara_ayah">
                                            <option value="">== Pilih Kewarganegaraan ==</option>
                                            <option value="WNI" <?= (old('warga_negara_ayah') == 'WNI') ? 'selected' : ''; ?>>WNI</option>
                                            <option value="WNA" <?= (old('warga_negara_ayah') == 'WNA') ? 'selected' : ''; ?>>WNA</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('warga_negara_ayah'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kebangsaan_ayah" class="col-sm-2 col-form-label">Kebangsaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('kebangsaan_ayah')) ? 'is-invalid' : ''; ?>" id="kebangsaan_ayah" name="kebangsaan_ayah" placeholder="Masukan kebangsaan..." value="<?= old('kebangsaan_ayah'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('kebangsaan_ayah'); ?>
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
                                    <label for="jk_pelapor" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-5">
                                        <select class="form-control <?= ($validation->hasError('jk_pelapor')) ? 'is-invalid' : ''; ?>" id="jk_pelapor" name="jk_pelapor">
                                            <option value="">== Pilih Jenis Kelamin ==</option>
                                            <option value="Laki-laki" <?= (old('jk_pelapor') == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?= (old('jk_pelapor') == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jk_pelapor'); ?>
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
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_saksi_satu')) ? 'is-invalid' : ''; ?>" id="nik_saksi_satu" name="nik_saksi_satu" placeholder="Masukan nik saksi 1..." value="<?= old('nik_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_saksi_satu" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_saksi_satu')) ? 'is-invalid' : ''; ?>" id="nama_saksi_satu" name="nama_saksi_satu" placeholder="Masukan umur saksi 1..." value="<?= old('nama_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="umur_saksi_satu" class="col-sm-2 col-form-label">Umur</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_saksi_satu')) ? 'is-invalid' : ''; ?>" id="umur_saksi_satu" name="umur_saksi_satu" placeholder="Masukan lengkap saksi 1..." value="<?= old('umur_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_saksi_satu" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_saksi_satu')) ? 'is-invalid' : ''; ?>" id="pekerjaan_saksi_satu" name="pekerjaan_saksi_satu" placeholder="Masukan pekerjaan saksi 1..." value="<?= old('pekerjaan_saksi_satu'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_saksi_satu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_saksi_satu" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_saksi_satu')) ? 'is-invalid' : ''; ?>" id="alamat_saksi_satu" name="alamat_saksi_satu" rows="3" placeholder="Masukan alamat saksi 1..."><?= old('alamat_saksi_satu'); ?></textarea>
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
                                        <input type="number" class="form-control <?= ($validation->hasError('nik_saksi_dua')) ? 'is-invalid' : ''; ?>" id="nik_saksi_dua" name="nik_saksi_dua" placeholder="Masukan nik saksi 2..." value="<?= old('nik_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_saksi_dua" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_saksi_dua')) ? 'is-invalid' : ''; ?>" id="nama_saksi_dua" name="nama_saksi_dua" placeholder="Masukan umur saksi 2..." value="<?= old('nama_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="umur_saksi_dua" class="col-sm-2 col-form-label">Umur</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('umur_saksi_dua')) ? 'is-invalid' : ''; ?>" id="umur_saksi_dua" name="umur_saksi_dua" placeholder="Masukan lengkap saksi 2..." value="<?= old('umur_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('umur_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pekerjaan_saksi_dua" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('pekerjaan_saksi_dua')) ? 'is-invalid' : ''; ?>" id="pekerjaan_saksi_dua" name="pekerjaan_saksi_dua" placeholder="Masukan pekerjaan saksi 2..." value="<?= old('pekerjaan_saksi_dua'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('pekerjaan_saksi_dua'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_saksi_dua" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_saksi_dua')) ? 'is-invalid' : ''; ?>" id="alamat_saksi_dua" name="alamat_saksi_dua" rows="3" placeholder="Masukan alamat saksi 2..."><?= old('alamat_saksi_dua'); ?></textarea>
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