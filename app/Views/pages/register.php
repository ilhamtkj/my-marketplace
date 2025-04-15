<?= $this->extend('layout/clearTemplate'); ?>

<?= $this->section('content'); ?>

    <div class="container mt-xl-5 d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="border col-lg-5 col-md-8 col-9 rounded-4 p-4">
            <form class="m-auto" action="POST">
                <h1 class="mb-3">Daftar</h1>
                <div class="col-12 mb-3">
                    <label class="form-label" for="email">Nama Bisnis</label>
                    <input class="form-control" type="text" id="business_name" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" id="email" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label" for="password">password</label>
                    <input class="form-control" type="password" id="password" required>
                </div>
                <!-- radio -->
                <p class="form-label">daftar sebagai</p>
                <div class="mb-4">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="account_type" value="producer" id="produsen"
                               required>
                        <label class="form-check-label" for="produsen">Produsen</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="account_type" value="distributor"
                               id="distributor">
                        <label class="form-check-label" for="distributor">Distributor</label>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <button class="btn btn-primary" type="submit">masuk</button>
                </div>
            </form>
            <div class="m-auto">
                <p class="text-secondary m-0">sudah memiliki akun? </p>
                <a class="link-primary" href="login">klik disini untuk masuk</a>
            </div>
        </div>
    </div>

<?= $this->endSection('content'); ?>