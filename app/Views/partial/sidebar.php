<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-text mx-3">Pelayanan Masyarakat</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($title == "Dashboard") ? 'active' : ''; ?>">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <?php if (session()->get('role') == 2) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Pelayanan Surat
        </div>

        <!-- Nav Item - Buat Surat -->
        <li class="nav-item <?= ($title == "Buat Surat") ? 'active' : ''; ?>">
            <a class="nav-link" href="/surat">
                <i class="fas fa-fw fa-plus-circle"></i>
                <span>Buat Surat</span></a>
        </li>
    <?php endif; ?>

    <!-- Admin -->
    <?php if (session()->get('role') == 1) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?= ($title == 'Pembuatan KTP' || $title == 'Pembuatan Kartu Keluarga' || $title == 'Pembuatan SKTM' || $title == 'Pembuatan Surat Keterangan' || $title == 'Pembuatan Pengantar Numpang Nikah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Keterangan Kelahiran' || $title == 'Pembuatan Keterangan Kematian' || $title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'active' : ''; ?>">
            <a class="nav-link <?= ($title == 'Pembuatan KTP' || $title == 'Pembuatan Kartu Keluarga' || $title == 'Pembuatan SKTM' || $title == 'Pembuatan Surat Keterangan' || $title == 'Pembuatan Pengantar Numpang Nikah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Keterangan Kelahiran' || $title == 'Pembuatan Keterangan Kematian' || $title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'active' : 'collapsed'; ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file"></i>
                <span>Surat</span>
            </a>
            <div id="collapseTwo" class="collapse <?= ($title == 'Pembuatan KTP' || $title == 'Pembuatan Kartu Keluarga' || $title == 'Pembuatan SKTM' || $title == 'Pembuatan Surat Keterangan' || $title == 'Pembuatan Pengantar Numpang Nikah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Keterangan Kelahiran' || $title == 'Pembuatan Keterangan Kematian' || $title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Daftar Surat:</h6>
                    <a class="collapse-item <?= ($title == 'Pembuatan KTP') ? 'active' : ''; ?>" href="/surat_ktp">Pembuatan KTP</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Kartu Keluarga') ? 'active' : ''; ?>" href="/surat_kk">Pembuatan KK</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Surat Keterangan') ? 'active' : ''; ?>" href="/surat_keterangan">Surat Keterangan</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Pengantar Pindah') ? 'active' : ''; ?>" href="/surat_pindah">Pengantar Pindah</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Keterangan Kelahiran') ? 'active' : ''; ?>" href="/surat_kelahiran">Keterangan Kelahiran</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Keterangan Kematian') ? 'active' : ''; ?>" href="/surat_kematian">Keterangan Kematian</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan SKTM') ? 'active' : ''; ?>" href="/surat_sktm">Keterangan Tidak Mampu</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Pengantar Numpang Nikah') ? 'active' : ''; ?>" href="/surat_nikah">Pengantar Nikah</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'active' : ''; ?>" href="/surat_waris">Keterangan Waris</a>
                </div>
            </div>
        </li>

        <li class="nav-item <?= ($title == "Data User") ? 'active' : ''; ?>">
            <a class="nav-link" href="/user">
                <i class="fas fa-fw fa-users"></i>
                <span>Data User</span></a>
        </li>
    <?php endif; ?>

    <!-- User -->
    <?php if (session()->get('role') == 2) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Histori Pembuatan Surat
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item <?= ($title == 'Pembuatan KTP' || $title == 'Permohonan Pembuatan Kartu Keluarga' || $title == 'Pembuatan SKTM' || $title == 'Pembuatan Surat Keterangan' || $title == 'Pembuatan Pengantar Numpang Nikah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Surat Keterangan Kelahiran' || $title == 'Pembuatan Surat Keterangan Kematian' || $title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'active' : ''; ?>">
            <a class="nav-link <?= ($title == 'Pembuatan KTP' || $title == 'Permohonan Pembuatan Kartu Keluarga' || $title == 'Pembuatan SKTM' || $title == 'Pembuatan Surat Keterangan' || $title == 'Pembuatan Pengantar Numpang Nikah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Surat Keterangan Kelahiran' || $title == 'Pembuatan Surat Keterangan Kematian' || $title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'active' : 'collapsed'; ?>" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-file"></i>
                <span>Histori Surat</span>
            </a>
            <div id="collapseTwo" class="collapse <?= ($title == 'Pembuatan KTP' || $title == 'Permohonan Pembuatan Kartu Keluarga' || $title == 'Pembuatan SKTM' || $title == 'Pembuatan Surat Keterangan' || $title == 'Pembuatan Pengantar Numpang Nikah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Pengantar Pindah' || $title == 'Pembuatan Surat Keterangan Kelahiran' || $title == 'Pembuatan Surat Keterangan Kematian' || $title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Daftar Surat:</h6>
                    <a class="collapse-item <?= ($title == 'Pembuatan KTP') ? 'active' : ''; ?>" href="/ktp/histori_ktp">Pembuatan KTP</a>
                    <a class="collapse-item <?= ($title == 'Permohonan Pembuatan Kartu Keluarga') ? 'active' : ''; ?>" href="/kartukeluarga/historikk">Pembuatan KK</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Surat Keterangan') ? 'active' : ''; ?>" href="/keterangan/historiketerangan">Surat Keterangan</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Pengantar Pindah') ? 'active' : ''; ?>" href="/pengantarpindah/historipindah">Pengantar Pindah</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Surat Keterangan Kelahiran') ? 'active' : ''; ?>" href="/kelahiran/historikelahiran">Keterangan Kelahiran</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Surat Keterangan Kematian') ? 'active' : ''; ?>" href="/kematian/historikematian">Keterangan Kematian</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan SKTM') ? 'active' : ''; ?>" href="/sktm/historisktm">Keterangan Tidak Mampu</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Pengantar Numpang Nikah') ? 'active' : ''; ?>" href="/pengantarnikah/historinikah">Pengantar Nikah</a>
                    <a class="collapse-item <?= ($title == 'Pembuatan Surat Keterangan Ahli Waris') ? 'active' : ''; ?>" href="/waris/historiwaris">Keterangan Waris</a>
                </div>
            </div>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Pengaturan
    </div>

    <!-- Nav Item - Profil -->
    <li class="nav-item  <?= ($title == "Profil") ? 'active' : ''; ?>">
        <a class="nav-link" href="/profil">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
    </li>

    <!-- Nav Item - Ganti Password -->
    <li class="nav-item  <?= ($title == "Ganti Password") ? 'active' : ''; ?>">
        <a class="nav-link" href="/changepassword">
            <i class="fas fa-fw fa-key"></i>
            <span>Ganti Password</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>