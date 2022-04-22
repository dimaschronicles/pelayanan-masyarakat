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
            <form action="/kk" method="POST">
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
                                <b>Persyaratan</b></p>
                                <ul>
                                    <li>Surat pengantar RT/ RW</li>
                                    <li>Kartu Keluarga</li>
                                    <li>Surat keterangan pindah datang dari daerah asal</li>
                                    <li>Fotocopy surat nikah/ cerai/ kematian/ kelahiran</li>
                                    <li>Fotocopy KTP-elektronik</li>
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
                                    <label for="nomor_kk" class="col-sm-2 col-form-label">Nomor KK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nomor_kk')) ? 'is-invalid' : ''; ?>" id="nomor_kk" name="nomor_kk" placeholder="Masukan nomor kartu keluarga..." value="<?= old('nomor_kk'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nomor_kk'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Masukan nik..." value="<?= old('nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nik'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" rows="3" placeholder="Masukan alamat..."><?= old('alamat'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="rt">RT</label>
                                                <input type="number" class="form-control <?= ($validation->hasError('rt')) ? 'is-invalid' : ''; ?>" id="rt" name="rt" placeholder="Masukan RT..." value="<?= old('rt'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rt'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="rw">RW</label>
                                                <input type="number" class="form-control <?= ($validation->hasError('rw')) ? 'is-invalid' : ''; ?>" id="rw" name="rw" placeholder="Masukan RW..." value="<?= old('rw'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('rw'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="desa">Desa</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('desa')) ? 'is-invalid' : ''; ?>" id="desa" name="desa" placeholder="Masukan desa..." value="<?= old('desa'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('desa'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="kecamatan">Kecamatan</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan..." value="<?= old('kecamatan'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kecamatan'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="kabupaten">Kabupaten</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" id="kabupaten" name="kabupaten" placeholder="Masukan kabupaten..." value="<?= old('kabupaten'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kabupaten'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="provinsi">Provinsi</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" id="provinsi" name="provinsi" placeholder="Masukan provinsi..." value="<?= old('provinsi'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('provinsi'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alasan" class="col-sm-2 col-form-label">Alasan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('alasan')) ? 'is-invalid' : ''; ?>" id="alasan" name="alasan">
                                            <option value="">== Pilih Alasan ==</option>
                                            <option value="Karena Membentuk Keluarga Baru" <?= (old('alasan') == 'Karena Membentuk Keluarga Baru') ? 'selected' : ''; ?>>Karena Membentuk Keluarga Baru</option>
                                            <option value="Karena Kartu Keluarga Rusak / Hilang" <?= (old('alasan') == 'Karena Kartu Keluarga Rusak / Hilang') ? 'selected' : ''; ?>>Karena Kartu Keluarga Rusak / Hilang</option>
                                            <option value="Lainnya" <?= (old('alasan') == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alasan'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_keluarga" class="col-sm-2 col-form-label">Jumlah Keluarga</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('jumlah_keluarga')) ? 'is-invalid' : ''; ?>" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Masukan jumlah keluarga..." value="<?= old('jumlah_keluarga'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jumlah_keluarga'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm mt-3">
                    <div class="card-header">
                        <b>Anggota Keluarga</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group row">
                                    <label for="anggota_1" class="col-sm-2 col-form-label">NIK / Nama</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_1_nik')) ? 'is-invalid' : ''; ?>" id="anggota_1_nik" name="anggota_1_nik" placeholder="Masukan nik ke 1..." value="<?= old('anggota_1_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_1_nik'); ?>
                                        </div>
                                        <small id="tanggal_help" class="form-text text-muted">Isikan satu saja jika hanya ada satu anggota keluarga.</small>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_1_nama')) ? 'is-invalid' : ''; ?>" id="anggota_1_nama" name="anggota_1_nama" placeholder="Masukan nama ke  1..." value="<?= old('anggota_1_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_1_nama'); ?>
                                        </div>
                                        <small id="tanggal_help" class="form-text text-muted">Isikan satu saja jika hanya ada satu anggota keluarga.</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_2" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_2_nik')) ? 'is-invalid' : ''; ?>" id="anggota_2_nik" name="anggota_2_nik" placeholder="Masukan nik ke 2..." value="<?= old('anggota_2_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_2_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_2_nama')) ? 'is-invalid' : ''; ?>" id="anggota_2_nama" name="anggota_2_nama" placeholder="Masukan nama ke  2..." value="<?= old('anggota_2_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_2_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_3_nik')) ? 'is-invalid' : ''; ?>" id="anggota_3_nik" name="anggota_3_nik" placeholder="Masukan nik ke 3..." value="<?= old('anggota_3_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_3_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_3_nama')) ? 'is-invalid' : ''; ?>" id="anggota_3_nama" name="anggota_3_nama" placeholder="Masukan nama ke  3..." value="<?= old('anggota_3_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_3_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_4" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_4_nik')) ? 'is-invalid' : ''; ?>" id="anggota_4_nik" name="anggota_4_nik" placeholder="Masukan nik ke 4..." value="<?= old('anggota_4_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_4_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_4_nama')) ? 'is-invalid' : ''; ?>" id="anggota_4_nama" name="anggota_4_nama" placeholder="Masukan nama ke  4..." value="<?= old('anggota_4_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_4_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_5" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_5_nik')) ? 'is-invalid' : ''; ?>" id="anggota_5_nik" name="anggota_5_nik" placeholder="Masukan nik ke 5..." value="<?= old('anggota_5_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_5_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_5_nama')) ? 'is-invalid' : ''; ?>" id="anggota_5_nama" name="anggota_5_nama" placeholder="Masukan nama ke  5..." value="<?= old('anggota_5_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_5_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_6" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_6_nik')) ? 'is-invalid' : ''; ?>" id="anggota_6_nik" name="anggota_6_nik" placeholder="Masukan nik ke 6..." value="<?= old('anggota_6_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_6_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_6_nama')) ? 'is-invalid' : ''; ?>" id="anggota_6_nama" name="anggota_6_nama" placeholder="Masukan nama ke  6..." value="<?= old('anggota_6_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_6_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_7" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_7_nik')) ? 'is-invalid' : ''; ?>" id="anggota_7_nik" name="anggota_7_nik" placeholder="Masukan nik ke 7..." value="<?= old('anggota_7_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_7_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_7_nama')) ? 'is-invalid' : ''; ?>" id="anggota_7_nama" name="anggota_7_nama" placeholder="Masukan nama ke  7..." value="<?= old('anggota_7_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_7_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_8" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_8_nik')) ? 'is-invalid' : ''; ?>" id="anggota_8_nik" name="anggota_8_nik" placeholder="Masukan nik ke 8..." value="<?= old('anggota_8_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_8_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_8_nama')) ? 'is-invalid' : ''; ?>" id="anggota_8_nama" name="anggota_8_nama" placeholder="Masukan nama ke  8..." value="<?= old('anggota_8_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_8_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_9" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_9_nik')) ? 'is-invalid' : ''; ?>" id="anggota_9_nik" name="anggota_9_nik" placeholder="Masukan nik ke 9..." value="<?= old('anggota_9_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_9_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_9_nama')) ? 'is-invalid' : ''; ?>" id="anggota_9_nama" name="anggota_9_nama" placeholder="Masukan nama ke  9..." value="<?= old('anggota_9_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_9_nama'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="anggota_10" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control <?= ($validation->hasError('anggota_10_nik')) ? 'is-invalid' : ''; ?>" id="anggota_10_nik" name="anggota_10_nik" placeholder="Masukan nik ke 10..." value="<?= old('anggota_10_nik'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_10_nik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control <?= ($validation->hasError('anggota_10_nama')) ? 'is-invalid' : ''; ?>" id="anggota_10_nama" name="anggota_10_nama" placeholder="Masukan nama ke  10..." value="<?= old('anggota_10_nama'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('anggota_10_nama'); ?>
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