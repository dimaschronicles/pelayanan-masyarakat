<?= $this->extend('layout/templates_homepage'); ?>
<?= $this->section('content_homepage'); ?>
<!-- Header-->
<header class="py-5 header-image">
    <div class="container px-5 header-content">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Buat Surat</h1>
                    <p class="lead text-white mb-4">Website layanan pembuatan surat Desa Pangebatan, Kecamatan Bantarkawung, Kabupaten Brebes</p>
                    <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Features section-->
<section class="py-5 border-bottom" id="daftarsurat">
    <div class="container px-5 mb-3">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">
                <i class="bi bi-file-text"></i> Daftar Surat
                <p class="lead mb-0 mt-3">Pilihan surat yang tersedia disini!</p>
            </h2>
        </div>
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <ul class="list-group">
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Permohonan Pembuatan KTP</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Permohonan Pembuatan KK</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Keterangan</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Pengantar Pindah</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Keterangan Kelahiran</li>
                </ul>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <ul class="list-group">
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Keterangan Meninggal Dunia / Kematian</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Keterangan Tidak Mampu (SKTM)</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Pengantar Nikah</li>
                    <li class="list-group-item"><i class="bi bi-file-earmark-fill"></i> Surat Keterangan Waris</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Pricing section-->
<section class="bg-light py-5 border-bottom" id="tutorial">
    <div class="container px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">
                Tutorial
            </h2>
            <p class="lead mb-0 mt-3">Cara membuat surat diwebsite ini.</p>
        </div>
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <p class="font-monospace">
                    1. Datang ke Balai Desa untuk dibuatkan akun. <br>
                    2. Login ke website. <br>
                    3. Masuk ke menu buat surat. <br>
                    4. Pilih surat yang ingin dibuat. <br>
                    5. Tunggu 1x24 jam untuk diverifikasi oleh admin dan tanda tangan kepala desa. User bisa melihat dibagian menu histori surat untuk informasi.<br>
                    6. Jika sudah maka user bisa mengambil di balai desa tanpa dipungut biaya.<br>
                </p>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="/img/step.svg" alt="" width="500px">
            </div>
        </div>
    </div>
</section>
<!-- Maps Lokasi -->
<section id="lokasi">
    <div class="maps-text text-center mb-3 mt-5">
        <h2 class="fw-bolder">
            <i class="bi bi-map-fill"></i> Lokasi
        </h2>
    </div>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31663.57848821124!2d108.91508526897307!3d-7.24683714225104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f8458cb809c63%3A0x5027a76e3566c20!2sPangebatan%2C%20Kec.%20Bantarkawung%2C%20Kabupaten%20Brebes%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1650613135766!5m2!1sid!2sid" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- Tentang section-->
<section class="py-5 border-bottom" id="tentang">
    <div class="container px-5 mb-3">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <ul class="list-group">
                    <li class="list-group-item border-0">
                        <img src="/img/maps-pin.png" width="20px">
                        <span style="margin-left: 8px;">Desa Pangebatan Kec. Bantarkawung, Kabupaten Brebes, Jawa Tengah</span>
                    </li>
                    <li class="list-group-item border-0">
                        <img src="/img/telp.png" width="20px">
                        <span style="margin-left: 8px;">671032</span>
                    </li>
                    <li class="list-group-item border-0">
                        <img src="/img/mail.png" width="20px">
                        <span style="margin-left: 8px;">pangebatandesa@gmail.com</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <ul class="list-group">
                    <li class="list-group-item border-0">
                        <h4>Tentang Kami</h4>
                        <p>Website ini dibuat untuk memenuhi tugas akhir skripsi.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-4 bg-dark">
    <div class="container px-5">
        <p class="m-0 text-center text-white">&copy; <?= date("Y"); ?> Pelayanan Masyarakat</p>
    </div>
</footer>
<?= $this->endSection(); ?>