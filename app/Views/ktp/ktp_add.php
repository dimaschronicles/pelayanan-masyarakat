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
            <form action="/ktp" method="POST">
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
                                <b>Syarat, Proses, dan Batas Waktu Pembuatan KTP</b></p>
                                <ul>
                                    <li>Tanggal berusia 17 tahun</li>
                                    <li>Tanggal perkawinan jika kawin di bawah usia 17 tahun</li>
                                    <li>Tanggal diterbitkannya Surat Keterangan Pindah Datang bagi penduduk yang datang dari luar daerah atau luar negeri</li>
                                    <li>Tanggal pelaporan perubahan status kependudukan dari penduduk sementara Orang Asing menjadi penduduk</li>
                                </ul>
                                <p><b>Ketentuan Penerbitan Kartu Tanda Penduduk (KTP)</b></p>
                                <ul>
                                    <li>KTP berlaku secara nasional diseluruh wilayah Republik Indonesia dan sebagai tanda pengenal serta keterangan domisili yang sah</li>
                                    <li>Setiap penduduk yang telah berusia 17 tahun atau belum berusia 17 tahun tetapi sudah kawin atau pernah kawin berhak mendapatkan KTP</li>
                                    <li>Setiap penduduk hanya diperbolehkan memiliki 1 KTP dengan masa berlaku 5 tahun (KTP Lama)</li>
                                    <li>Bagi penduduk WNI yang berusia 60 tahun ke atas diberikan KTP berlaku seumur hidup (KTP Lama), untuk E-KTP berlaku seumur hidup sejak diterbitkan</li>
                                </ul>
                                <p><b>Syarat Penerbitan KTP Baru</b></p>
                                <ul>
                                    <li>Telah berusia 17 tahun atau sudah kawin atau pernah kawin</li>
                                    <li>Surat Pengantar RT/RW dan Kepala Desa/Lurah</li>
                                    <li>Fotokopi KK</li>
                                    <li>Fotokopi Akta Nikah/Akta Kawin bagi penduduk yang belum berusia 17 tahun</li>
                                    <li>Fotokopi Akta Kelahiran</li>
                                    <li>Surat Keterangan Pindah yang diterbitkan oleh pemerintah Kabupaten/Kota dari daerah asal, bagi penduduk pendatang dari luar Kabupaten/Kota</li>
                                    <li>Surat Keterangan Datang dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah</li>
                                    <li>Datang langsung untuk di foto (E-KTP) atau melampirkan pas foto terbaru ukuran 3x4 sebanyak 2 lembar (KTP Lama)</li>
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
                                    <label for="jenis" class="col-sm-2 col-form-label">Permohonan KTP</label>
                                    <div class="col-sm-10">
                                        <select class="form-control <?= ($validation->hasError('jenis')) ? 'is-invalid' : ''; ?>" id="jenis" name="jenis">
                                            <option value="">== Pilih Permohonan ==</option>
                                            <option value="Baru" <?= (old('jenis') == 'Baru') ? 'selected' : ''; ?>>Baru</option>
                                            <option value="Perpanjangan" <?= (old('jenis') == 'Perpanjangan') ? 'selected' : ''; ?>>Perpanjangan</option>
                                            <option value="Penggantian" <?= (old('jenis') == 'Penggantian') ? 'selected' : ''; ?>>Penggantian</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('jenis'); ?>
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
                                                <label for="dusun">Dusun</label>
                                                <input type="text" class="form-control <?= ($validation->hasError('dusun')) ? 'is-invalid' : ''; ?>" id="dusun" name="dusun" placeholder="Masukan Dusun..." value="<?= old('dusun'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('dusun'); ?>
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