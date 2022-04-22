<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <img class="img-profile img-thumbnail rounded-circle mt-3 shadow-sm" src="<?= base_url(); ?>/img/users.jpg" width="200px">
                    <h5 class="card-title mt-3"><?= session()->get('nik'); ?></h5>
                    <p class="card-text"><?= session()->get('nama'); ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>