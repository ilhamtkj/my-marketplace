<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container bg-body-tertiary mt-4">
    <h4 class="fw-bold">Profil</h4>
    <p>Hi, <?= $name; ?></p>
    <div class="w-25 mb-3">
        <img src="/img/icon/user.png" class="w-50" alt="user icon">
    </div>
    <h5 class="mb-0">Data akun</h5>
    <div class="row g-2 mb-3">
        <div class="col-auto">
            <p class="mb-1">Nama bisnis:</p>
            <p class="mb-1">Email:</p>
        </div>
        <div class="col">
            <p class="mb-1">PT Jualan Mainan</p>
            <p class="mb-1">ptjm@ngawur.com</p>
        </div>
    </div>

    <!-- alamat-->
    <h5 class="mb-0">Alamat</h5>
    <div class="row g-2 mb-3">
        <div class="col-auto">
            <p class="mb-1">Provinsi:</p>
            <p class="mb-1">Kota:</p>
        </div>
        <div class="col">
            <p class="mb-1">Jawa Tengah</p>
            <p class="mb-1">Tegal</p>
        </div>
    </div>

    <!-- kontak -->
    <h5 class="mb-0">Kontak</h5>
    <div class="row g-2 mb-3">
        <div class="col-auto">
            <p class="mb-1">WhatsApp:</p>
            <p class="mb-1"></p>
        </div>
        <div class="col">
            <p class="mb-1">081234567890</p>
        </div>
    </div>

    <a href="profile-edit" class="btn btn-primary">Edit Profil</a>
</div>

<?= $this->endSection('content'); ?>
