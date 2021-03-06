<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="/">Pelayanan Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link <?= ($title == 'Home | Pelayanan Masyarakat') ? 'active' : ''; ?>" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#daftarsurat">Daftar Surat</a></li>
                <li class="nav-item"><a class="nav-link" href="#tutorial">Tutorial</a></li>
                <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                <li class="nav-item"><a class="nav-link <?= ($title == 'Masuk') ? 'active' : ''; ?>" href="/auth">Masuk</a></li>
            </ul>
        </div>
    </div>
</nav>