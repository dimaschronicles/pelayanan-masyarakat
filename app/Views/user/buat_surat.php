<?= $this->extend('layout/templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="/ktp">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Permohonan Pembuatan KTP
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/kartukeluarga">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Permohonan Pembuatan KK
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/keterangan">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/pengantarpindah">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Pengantar Pindah
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/kelahiran">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Kelahiran
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/kematian">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Meninggal Dunia / Kematian
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/sktm">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Tidak Mampu (SKTM)
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/pengantarnikah">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Pengantar Nikah
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/waris">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Waris
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>