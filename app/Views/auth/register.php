<?= $this->extend('layout/templates_homepage'); ?>
<?= $this->section('content_homepage'); ?>

<!-- Contact section-->
<section class="bg-light py-5" id="login">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-4">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-circle"></i></i></div>
            <h2 class="fw-bolder"><?= $title; ?></h2>
            <p class="lead mb-0">Selamat Datang di Website Pelayanan Desa</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">

                <?= session()->getFlashdata('message'); ?>

                <form action="/auth/signup" method="POST">
                    <?= csrf_field(); ?>
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" name="nik" id="nik" type="number" placeholder="Masukan NIK..." value="<?= old('nik'); ?>" />
                        <div class="invalid-feedback">
                            <?= $validation->getError('nik'); ?>
                        </div>
                        <label for="nik">NIK</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" type="text" placeholder="Masukan nama..." value="<?= old('nama'); ?>" />
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                        <label for="nama">Nama Lengkap</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" id="email" type="email" placeholder="Masukan email..." value="<?= old('email'); ?>" />
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" name="no_hp" id="no_hp" type="number" placeholder="Masukan no_hp..." value="<?= old('no_hp'); ?>" />
                        <div class="invalid-feedback">
                            <?= $validation->getError('no_hp'); ?>
                        </div>
                        <label for="no_hp">No HP</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="password" type="password" placeholder="Masukan kata sandi..." />
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?= ($validation->hasError('password_conf')) ? 'is-invalid' : ''; ?>" name="password_conf" id="password_conf" type="password" placeholder="Konfirmasi password..." />
                        <div class="invalid-feedback">
                            <?= $validation->getError('password_conf'); ?>
                        </div>
                        <label for="password_conf">Konfirmasi Password</label>
                    </div>

                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg mb-3" type="submit">Daftar</button>
                        <a href="/auth" class="btn btn-outline-secondary btn-lg">Kembali</a>
                    </div>
                </form>
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
<script>
    function showPass() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?= $this->endSection(); ?>