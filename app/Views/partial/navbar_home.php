<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="/">Pelayanan Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link <?= ($title == 'Home | Pelayanan Masyarakat') ? 'active' : ''; ?>" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">FAQ</a></li>
                <li class="nav-item"><a class="nav-link <?= ($title == 'Login') ? 'active' : ''; ?>" href="/auth">Login</a></li>
            </ul>
        </div>
    </div>
</nav>