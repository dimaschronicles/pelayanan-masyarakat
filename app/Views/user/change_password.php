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

            <div class="mt-1">
                <?= session()->getFlashdata('message'); ?>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="/profil/savepass" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">
                        <div class="form-group">
                            <label for="current_password">Password Saat Ini</label>
                            <input type="password" class="form-control <?= ($validation->hasError('current_password')) ? 'is-invalid' : ''; ?>" id="current_password" name="current_password" placeholder="Masukan password saat ini...">
                            <div class="invalid-feedback">
                                <?= $validation->getError('current_password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="new_password">Password Baru</label>
                            <input type="password" class="form-control <?= ($validation->hasError('new_password')) ? 'is-invalid' : ''; ?>" id="new_password" name="new_password" placeholder="Masukan password baru...">
                            <div class="invalid-feedback">
                                <?= $validation->getError('new_password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control <?= ($validation->hasError('confirm_password')) ? 'is-invalid' : ''; ?>" id="confirm_password" name="confirm_password" placeholder="Masukan konfirmasi password baru...">
                            <div class="invalid-feedback">
                                <?= $validation->getError('confirm_password'); ?>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="show_pass" name="show_pass" onclick="showPass()">
                            <label class="form-check-label" for="show_pass">Tampilkan Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showPass() {
        var pass = document.getElementById("current_password");
        var new_pass = document.getElementById("new_password");
        var pass_conf = document.getElementById("confirm_password");

        if (pass.type && new_pass.type && pass_conf.type === "password") {
            pass.type = "text";
            new_pass.type = "text";
            pass_conf.type = "text";
        } else {
            pass.type = "password";
            new_pass.type = "password";
            pass_conf.type = "password";
        }
    }
</script>
<?= $this->endSection(); ?>