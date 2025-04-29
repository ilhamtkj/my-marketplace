<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <!-- card -->
    <div class="card mb-3 border-0" style="max-width: 100%;">
        <div class="row g-0">

            <!-- image -->
            <div class="col-lg-5">
                <div class="carousel-inner rounded object-fit-cover d-flex align-items-center" style="height: 50vh;">
                    <div class="carousel-item active">
                        <img src="<?= product_image_url($productData['image_name']) ?>" class="d-block w-100"
                            alt="gambar <?= $productData['name'] ?>">
                    </div>
                </div>
                <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->

                <!-- carousel -->
                <!-- <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner rounded object-fit-cover d-flex align-items-center"
                        style="height: 50vh">
                        <div class="carousel-item active">
                            <img src="/img/porsche.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/dodge.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/ford.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/corvette.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
            </div>

            <!-- title and price -->
            <div class="col-lg-7">
                <div class="card-body">
                    <h4 class="card-title"><?= $productData['name'] ?></h4>
                    <p class="text-secondary mb-1"><i class="bi bi-tags"></i> Kategori</p>
                    <p class="text-secondary mb-0">Terjual 1</p>
                    <p class="card-text fs-2 fw-bold">
                        Rp<?= number_format((float)$productData['price'], 0, ',', '.') ?>
                    </p>
                    <p class="card-text lh-1">
                        <i class="bi bi-geo-alt"></i>
                        Lokasi Toko: <?= $productData['city'] ?>
                    </p>
                    <div class="col-lg-3">
                        <button class="btn btn-primary d-block w-100">+ Keranjang</button>
                        <a class="btn btn-outline-primary w-100 mt-2" href="">Beli</a>
                    </div>
                </div>
            </div>
            <!-- detail/description -->
            <div class="col mt-3">
                <hr>
                <div class="container">
                    <h5 class="card-title">Detail</h5>
                    <p class="card-title">
                        <?= $productData['description'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end card -->
</div>

<?= $this->endSection('content'); ?>