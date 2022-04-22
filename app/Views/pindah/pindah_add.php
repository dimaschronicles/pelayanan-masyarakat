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
            <form action="/pengantarpindah" method="POST">
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
                        <b>Isi Surat</b>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
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
                                    <label for="nama_kepkel" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control <?= ($validation->hasError('nama_kepkel')) ? 'is-invalid' : ''; ?>" id="nama_kepkel" name="nama_kepkel" placeholder="Masukan nama kepala keluarga..." value="<?= old('nama_kepkel'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_kepkel'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_sekarang" class="col-sm-2 col-form-label">Alamat Sekarang</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_sekarang')) ? 'is-invalid' : ''; ?>" id="alamat_sekarang" name="alamat_sekarang" rows="3" placeholder="Masukan alamat sekarang..."><?= old('alamat_sekarang'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_sekarang'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat_tujuan" class="col-sm-2 col-form-label">Alamat Tujuan</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control <?= ($validation->hasError('alamat_tujuan')) ? 'is-invalid' : ''; ?>" id="alamat_tujuan" name="alamat_tujuan" rows="3" placeholder="Masukan alamat sekarang..."><?= old('alamat_tujuan'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('alamat_tujuan'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_keluarga" class="col-sm-2 col-form-label">Jumlah Keluarga</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control <?= ($validation->hasError('jumlah_keluarga')) ? 'is-invalid' : ''; ?>" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Masukan nomor kartu keluarga..." value="<?= old('jumlah_keluarga'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jumlah_keluarga'); ?>
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