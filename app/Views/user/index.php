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
                    <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
                </div>
                <div class="card-body">
                    <a href="/user_add" class="btn btn-primary mb-4">Tambah User</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1;
                                foreach ($user as $u) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $u['nik']; ?></td>
                                        <td><?= $u['nama']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $u['id_user']; ?>">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                            <a href="/user_edit/<?= $u['id_user']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="/user/detailuser/<?= $u['id_user']; ?>" class="btn btn-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <?php if ($u['active'] == 0) : ?>
                                                <a href="/user/aktivasi/<?= $u['id_user']; ?>" class="btn btn-success"><i class="fas fa-check"></i> Aktivasi</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal<?= $u['id_user']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                    <form action="/user/<?= $u['id_user']; ?>" method="post" class="d-inline">
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