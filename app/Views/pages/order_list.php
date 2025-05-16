<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar pesanan</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="d-flex gap-3">
                <p class="card-subtitle">17 Mei 2025</p>
                <p class="card-subtitle bg-warning rounded px-1">status pesanan</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>
