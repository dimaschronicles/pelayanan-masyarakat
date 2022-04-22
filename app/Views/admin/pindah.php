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
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Permohonan Surat Pengantar Pindah</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1;
                                foreach ($pindah as $p) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $p['nik']; ?></td>
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
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $p['id_pindah']; ?>">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                            <?php if ($p['status'] == 'selesai' || $p['status'] == 'dibatalkan' || $p['status'] == 'ditolak') : ?>
                                            <?php else : ?>
                                                <a href="/pengantarpindah/detailpindah/<?= $p['id_pindah']; ?>" class="btn btn-info" target="blank"><i class="fas fa-info-circle"></i> Detail</a>
                                                <a href="/pengantarpindah/printpindah/<?= $p['id_pindah']; ?>" class="btn btn-primary" target="blank"><i class="fas fa-print"></i> Cetak</a>
                                                <a href="/pengantarpindah/donepindah/<?= $p['id_pindah']; ?>" class="btn btn-success"><i class="fas fa-check"></i> Selesai</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?= $p['id_pindah']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Peringatan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" data-dismiss="modal">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah data ini akan dihapus?
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="/pengantarpindah/<?= $p['id_pindah']; ?>" method="post" class="d-inline">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>