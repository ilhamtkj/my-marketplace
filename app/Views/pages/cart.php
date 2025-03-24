<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div class="container bg-dark-subtle mt-5" style="min-height: 80vh">
        <div class="row">
            <div class="col-8 bg-info">
                <!-- card -->
                <div class="card mb-3 mt-3">
                    <div class="card-header">toko a</div>
                    <div class="row g-0">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <div class="col-8">
                                <img src="/img/porsche.jpg" class="img-fluid rounded" alt="...">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">toko b</div>
                    <div class="row g-0"  style="height: 20vh">
                        <div class="col-md-4 h-100 d-flex justify-content-center align-items-center">
                            <img src="/img/corvette.jpg" class="h-75 w-50 object-fit-cover rounded shadow" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 bg-danger">
                <p>world</p>
            </div>
        </div>
    </div>



<?= $this->endSection('content'); ?>