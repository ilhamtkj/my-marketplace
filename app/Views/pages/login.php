<?= $this->extend('layout/clearTemplate'); ?>

<?= $this->section('content'); ?>

<!-- jika error/gagal login -->
<?php if (session()->getFlashdata('error')) : ?>
    <p class="text-white text-bg-danger text-center"><?= session()->getFlashdata('error') ?></p>
<?php elseif (session()->getFlashdata('message')) : ?>
    <p class="text-white text-bg-success text-center"><?= session()->getFlashdata('message') ?></p>
<?php endif; ?>

<!-- konten utama -->
<div class="container mt-xl-5 d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="border col-lg-5 col-md-8 col-9 rounded-4 p-4">
        <form method="post" class="m-auto" action="<?= base_url('/login/process') ?>">
            <h1 class="mb-3">Masuk</h1>
            <div class="col-12 mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="col-12 mb-3">
                <label class="form-label" for="password">password</label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <div class="col-12 mb-3">
                <button class="btn btn-primary" type="submit">masuk</button>
            </div>
        </form>
        <div class="m-auto">
            <p class="text-secondary m-0">belum memiliki akun? </p>
            <a class="link-primary" href="register">klik disini untuk mendaftar</a>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>