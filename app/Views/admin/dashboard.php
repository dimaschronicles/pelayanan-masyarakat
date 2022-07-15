<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <?php if (session()->get('role') == 1) : ?>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahUser; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Surat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">9</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-file fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Status Surat Selesai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahSelesai; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Status Surat Gagal</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahDibatalkan; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-exclamation-circle fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- Konten yang muncul jika role usernya 2 -->
    <?php if (session()->get('role') == 2) : ?>
        <!-- Content Row -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h3>Selamat Datang, <strong><?= session('nama'); ?></strong></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Riwayat Pembuatan Surat
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <?php foreach ($ktp as $k) : ?>
                                    <tr>
                                        <td><?= $k['tanggal']; ?></td>
                                        <td>Permohonan KTP</td>
                                        <td><?= $k['nama_lengkap']; ?></td>
                                        <td>
                                            <?php if ($k['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $k['status']; ?></span>
                                            <?php elseif ($k['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $k['status']; ?></span>
                                            <?php elseif ($k['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $k['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($kk as $kartu) : ?>
                                    <tr>
                                        <td><?= $kartu['tanggal']; ?></td>
                                        <td>Permohonan Kartu Keluarga</td>
                                        <td><?= $kartu['nama_lengkap']; ?></td>
                                        <td>
                                            <?php if ($kartu['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $kartu['status']; ?></span>
                                            <?php elseif ($kartu['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $kartu['status']; ?></span>
                                            <?php elseif ($kartu['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $kartu['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($keterangan as $ket) : ?>
                                    <tr>
                                        <td><?= $ket['tanggal']; ?></td>
                                        <td>Surat Keterangan</td>
                                        <td><?= $ket['nama']; ?></td>
                                        <td>
                                            <?php if ($ket['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $ket['status']; ?></span>
                                            <?php elseif ($ket['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $ket['status']; ?></span>
                                            <?php elseif ($ket['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $ket['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($pindah as $p) : ?>
                                    <tr>
                                        <td><?= $p['tanggal']; ?></td>
                                        <td>Surat Pengantar Pindah</td>
                                        <td><?= $p['nama_lengkap']; ?></td>
                                        <td>
                                            <?php if ($p['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $p['status']; ?></span>
                                            <?php elseif ($p['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $p['status']; ?></span>
                                            <?php elseif ($p['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $p['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($kelahiran as $kel) : ?>
                                    <tr>
                                        <td><?= $kel['tanggal']; ?></td>
                                        <td>Surat Keterangan Kelahiran</td>
                                        <td><?= $kel['nama_kepkel']; ?></td>
                                        <td>
                                            <?php if ($kel['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $kel['status']; ?></span>
                                            <?php elseif ($kel['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $kel['status']; ?></span>
                                            <?php elseif ($kel['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $kel['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($kematian as $kem) : ?>
                                    <tr>
                                        <td><?= $kem['tanggal']; ?></td>
                                        <td>Surat Keterangan Kematian</td>
                                        <td><?= $kem['nama_kepkel']; ?></td>
                                        <td>
                                            <?php if ($kem['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $kem['status']; ?></span>
                                            <?php elseif ($kem['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $kem['status']; ?></span>
                                            <?php elseif ($kem['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $kem['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($sktm as $s) : ?>
                                    <tr>
                                        <td><?= $s['tanggal']; ?></td>
                                        <td>Surat Keterangan Tidak Mampu</td>
                                        <td><?= $s['nama_lengkap']; ?></td>
                                        <td>
                                            <?php if ($s['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $s['status']; ?></span>
                                            <?php elseif ($s['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $s['status']; ?></span>
                                            <?php elseif ($s['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $s['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($nikah as $n) : ?>
                                    <tr>
                                        <td><?= $n['tanggal']; ?></td>
                                        <td>Surat Pengantar Nikah</td>
                                        <td><?= $n['nama']; ?></td>
                                        <td>
                                            <?php if ($n['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $n['status']; ?></span>
                                            <?php elseif ($n['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $n['status']; ?></span>
                                            <?php elseif ($n['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $n['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php foreach ($waris as $w) : ?>
                                    <tr>
                                        <td><?= $w['tanggal']; ?></td>
                                        <td>Surat Keterangan Waris</td>
                                        <td><?= $w['nama_alm']; ?></td>
                                        <td>
                                            <?php if ($w['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $w['status']; ?></span>
                                            <?php elseif ($w['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $w['status']; ?></span>
                                            <?php elseif ($w['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $w['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>
<?= $this->endSection(); ?>