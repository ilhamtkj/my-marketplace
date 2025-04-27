<?= $this->extend('layout/clearTemplate'); ?>

<?= $this->section('content'); ?>

<?php if (session()->getFlashdata('error')) : ?>
    <p class="text-white text-bg-danger text-center"><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>

    <div class="container mt-xl-5 d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="border col-lg-5 col-md-8 col-9 rounded-4 p-4">
            <form class="m-auto" method="post" action="<?= base_url('/register/process') ?>">
                <h1 class="mb-3">Daftar</h1>
                <div class="col-12 mb-3">
                    <label class="form-label" for="company_name">Nama Bisnis</label>
                    <input class="form-control" type="text" id="company_name" name="company_name" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="password">password</label>
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>
                <!-- radio -->
                <p class="form-label">daftar sebagai</p>
                <div class="mb-4">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="role" value="producer" id="produsen"
                               required>
                        <label class="form-check-label" for="produsen">Produsen</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="role" value="distributor"
                               id="distributor">
                        <label class="form-check-label" for="distributor">Distributor</label>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </div>
            </form>
            <div class="m-auto">
                <p class="text-secondary m-0">sudah memiliki akun? </p>
                <a class="link-primary" href="<?= base_url('/login') ?>">klik disini untuk masuk</a>
            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>