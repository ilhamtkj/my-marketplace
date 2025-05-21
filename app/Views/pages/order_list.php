<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar pesanan</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="d-flex gap-3 mb-2 pb-2 border-bottom">
                <p class="card-subtitle">17 Mei 2025</p>
                <p class="card-subtitle bg-warning align-self-start rounded px-1">status pesanan</p>
                <button class="btn btn-primary ms-auto">Selesai</button>
            </div>
            <div class="row row-cols-2">
                <div class="col-md-4 col-lg-2">
                    <div class="ratio ratio-4x3">
                        <img src="<?= base_url('assets/img/corvette.jpg') ?> "
                             alt="gambar dummy"
                             class="object-fit-cover">
                    </div>
                </div>
                <div class="col">
                    <h5 class="m-0">mobil mobilan corvette warna hitam</h5>
                    <p class="text-secondary m-0">Jumlah: 1</p>
                    <p><span class="fw-bold">Rp200.000</span>/produk</p>
                    <p class="m-0">Total: <span class="fw-bold">Rp200.000</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>
