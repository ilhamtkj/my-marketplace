<div class="container-fluid bg-body-secondary">
    <div class="row row-cols-auto col-7">
        <p class="mb-0">Kategori:</p>
        <a class="col text-secondary text-decoration-none" href="">Terlaris</a>
        <a class="col text-secondary text-decoration-none" href="">Terbaru</a>
        <a class="col text-secondary text-decoration-none" href="">Makanan</a>
        <a class="col text-secondary text-decoration-none" href="">Mainan</a>
        <a class="col text-secondary text-decoration-none" href="">Furnitur</a>
    </div>
</div>

<nav class="navbar bg-body-secondary sticky-top">

    <div class="container-fluid">
        <a class="navbar-brand text-primary fw-bold" href="<?= base_url('/') ?>">My-Marketplace</a>
        <form class="d-flex col-lg-7 col-md-6" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">cari</button>
        </form>
        <a href="cart">
            <i class="bi bi-cart3 fs-4"></i>
        </a>

        <?php if (session()->get('logged_in')): ?>
            <a class="btn btn-primary" href="<?= base_url('/profile-') . session('role') ?>">Profil Saya</a>
        <?php else: ?>
            <a class="btn btn-primary" href="<?= base_url('/login') ?>">Masuk/daftar</a>
        <?php endif; ?>

    </div>

</nav>