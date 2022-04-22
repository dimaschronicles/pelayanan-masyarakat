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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Permohonan Surat Keterangan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1;
                                foreach ($keterangan as $k) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $k['nama']; ?></td>
                                        <td>
                                            <?php if ($k['status'] == 'menunggu') : ?>
                                                <span class="badge badge-pill badge-warning"><?= $k['status']; ?></span>
                                            <?php elseif ($k['status'] == 'dibatalkan') : ?>
                                                <span class="badge badge-pill badge-dark"><?= $k['status']; ?></span>
                                            <?php elseif ($k['status'] == 'selesai') : ?>
                                                <span class="badge badge-pill badge-success"><?= $k['status']; ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (session()->get('role') == 2) : ?>
                                                <?php if ($k['status'] == 'dibatalkan' || $k['status'] == 'selesai') : ?>
                                                <?php else : ?>
                                                    <a href="/keterangan/detailketerangan/<?= $k['id_suket']; ?>" class="btn btn-info" target="blank"><i class="fas fa-info-circle"></i> Detail</a>
                                                    <a href="/keterangan/cancelketerangan/<?= $k['id_suket']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fas fa-window-close"></i> Batal</a>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if (session()->get('role') == 1) : ?>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $k['id_suket']; ?>">
                                                    <i class="fas fa-trash"></i> Hapus
                                                </button>
                                                <a href="/keterangan/printnikah" class="btn btn-primary" target="blank"><i class="fas fa-print"></i> Cetak</a>
                                                <a href="" class="btn btn-success"><i class="fas fa-check"></i> Selesai</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?= $k['id_suket']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                    <form action="/keterangan/<?= $k['id_suket']; ?>" method="post" class="d-inline">
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