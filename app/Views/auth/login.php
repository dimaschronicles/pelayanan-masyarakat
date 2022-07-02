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

                <form action="/auth/login" method="POST">
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
                        <input class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="password" type="password" placeholder="Masukan kata sandi..." />
                        <div class="invalid-feedback">
                            <?= $validation->getError('password'); ?>
                        </div>
                        <label for="password">Password</label>
                    </div>

                    <!-- Submit Button-->
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Sign In</button>
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