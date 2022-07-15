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
                    <a href="/ktp/histori_ktp">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Permohonan Pembuatan KTP
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/kartukeluarga/historikk">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Permohonan Pembuatan KK
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/keterangan/historiketerangan">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/pengantarpindah/historipindah">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Pengantar Pindah
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/kelahiran/historikelahiran">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Kelahiran
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/kematian/historikematian">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Meninggal Dunia / Kematian
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/sktm/historisktm">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Tidak Mampu (SKTM)
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/pengantarnikah/historinikah">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Pengantar Nikah
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="/waris/historiwaris">
                        <i class="fas fa-fw fa-file-alt"></i> Surat Keterangan Waris
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>