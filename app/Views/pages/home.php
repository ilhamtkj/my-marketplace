<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- carousel -->
    <div id="carouselExampleInterval" class="carousel slide carousel-fade my-4 shadow" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active carousel-item-home" data-bs-interval="5000">
                <img src="/img/porsche.jpg" class="d-block w-100 rounded" alt="porsche">
            </div>
            <div class="carousel-item carousel-item-home" data-bs-interval="5000">
                <img src="/img/dodge.jpg" class="d-block w-100 rounded" alt="dodge">
            </div>
            <div class="carousel-item carousel-item-home">
                <img src="/img/ford.jpg" class="d-block w-100 rounded" alt="ford">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end carousel -->

    <!-- card -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">

        <?php
        $limit = floor(count($productData) / 4) * 4;
        for ($i = 0; $i < $limit; $i++): ?>

            <div class="col card-list">
                <div class="card h-100">
                    <img src="<?= product_image_url($productData[$i]['image_name']) ?>" class="card-img-top object-fit-cover"
                        style="height: 30vh"
                        alt="gambar <?= $productData[$i]['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title mb-0"><?= $productData[$i]['name'] ?></h5>
                        <p class="text-secondary mb-1"><i class="bi bi-tags"></i> Kategori</p>
                        <p class="card-text fw-bold mb-0">
                            Rp<?= number_format((float)$productData[$i]['price'], 0, ',', '.') ?>
                        </p>
                        <p class="text-secondary mb-0">Terjual 1</p>
                        <a class="stretched-link" href="<?= base_url('/detail/produk') . $productData[$i]['id'] ?>"></a>
                    </div>
                </div>
            </div>

        <?php endfor; ?>

    </div>
    <!-- end card -->

</div>

<?= $this->endSection('content'); ?>