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
            <div class="col card-list">
                <div class="card h-100">
                    <img src="/img/corvette.jpg" class="card-img-top object-fit-cover" style="height: 30vh"
                         alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mobil mobilan chevrolet corvette warna hitam</h5>
                        <p class="card-text fw-bold">Rp200.0000</p>
                        <p class="text-body">Kab. Tegal</p>
                        <a class="stretched-link" href="detail"></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/corvette.jpg" class="card-img-top object-fit-cover" style="height: 30vh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/corvette.jpg" class="card-img-top object-fit-cover" style="height: 30vh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/corvette.jpg" class="card-img-top object-fit-cover" style="height: 30vh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/corvette.jpg" class="card-img-top object-fit-cover" style="height: 30vh" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- end card -->

    </div>

<?= $this->endSection('content'); ?>