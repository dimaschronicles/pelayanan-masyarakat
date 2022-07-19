<?= $this->extend('layout/templates_homepage'); ?>
<?= $this->section('content_homepage'); ?>

<!-- Contact section-->
<section class="bg-light py-5" id="login">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-4">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person-circle"></i></i></div>
            <h2 class="fw-bolder"><?= $title; ?></h2>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">

                <?= session()->getFlashdata('message'); ?>

                <form action="/auth/reset" method="POST">
                    <?= csrf_field(); ?>
                    <ul class="list-group mb-3">
                        <li class="list-group-item">NIK : <?= session()->get('reset_nik'); ?></li>
                    </ul>

                    <div class="form-floating mb-3">
                        <input type="hidden" name="nik" value="<?= session()->get('reset_nik'); ?>">
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
                        <button class="btn btn-primary btn-lg mb-3" type="submit">Reset Password</button>
                        <a href="/auth/resetsession" class="btn btn-outline-secondary mb-1">Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="py-4 bg-dark fixed-bottom">
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