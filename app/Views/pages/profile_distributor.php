<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-body-tertiary mt-4">
    <div class="row">
        <!-- left side -->
        <div class="col-lg-8 mb-3">
            <h4 class="fw-bold">Profil</h4>
            <p>Hi, <?= session('name') ?></p>
            <div class="w-25 mb-3">
                <img src="<?= base_url('assets/img/icon/user.png') ?>" class="w-50" alt="user icon">
            </div>
            <!-- akun -->
            <h5 class="mb-0">Data akun</h5>
            <div class="row">
                <div class="col-4 col-md-2">
                    <p class="mb-0">Nama bisnis</p>
                </div>
                <div class="col">
                    <p class="mb-0"><?= session('name') ?></p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-4 col-md-2">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col">
                    <p class="mb-0"><?= session('email') ?></p>
                </div>
            </div>
            <!-- alamat -->
            <h5 class="mb-0">Alamat</h5>
            <div class="row">
                <div class="col-4 col-md-2">
                    <p class="mb-0">Nama penerima</p>
                </div>
                <div class="col">
                    <p class="mb-0">ilham</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-md-2">
                    <p class="mb-0">Telepon</p>
                </div>
                <div class="col">
                    <p class="mb-0">081234567890</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-md-2">
                    <p class="mb-0">Alamat lengkap</p>
                </div>
                <div class="col">
                    <p class="mb-0">Pendrikan Kidul, Semarang Tengah, Kota Semarang, Jawa Tengah</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-md-2">
                    <p class="mb-0">Kode pos</p>
                </div>
                <div class="col">
                    <p class="mb-0">52131</p>
                </div>
            </div>

            <a href="/profile/profile-edit-<?= session('role') ?>" class="btn btn-primary mt-3">Edit Profil</a>
        </div>

        <!-- right side -->
        <div class="col-lg-4 mb-3 border rounded">
            <h4 class="fw-bold">Opsi lainnya</h4>
            <a class="btn btn-primary w-100 mb-3" href="<?= base_url('/dashboard') ?>">Kelola produk</a>
            <a class="btn btn-primary w-100 mb-3" href="<?= base_url('/order-list') ?>">Daftar pesanan</a>
        </div>
    </div>

    <!-- logout -->
    <hr>
    <a href="<?= base_url('/logout') ?>" class="btn btn-outline-danger">Keluar</a>

</div>

<?= $this->endSection('content'); ?>