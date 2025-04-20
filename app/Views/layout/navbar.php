<nav class="navbar bg-body-secondary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="<?= base_url('/') ?>">My-Market</a>
        <form class="d-flex col-lg-7 col-md-6" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">cari</button>
        </form>
        <a href="cart">
            <i class="bi bi-cart3 fs-4"></i>
        </a>

        <?php if (session()->get('logged_in')): ?>
            <a class="btn btn-primary" href="<?= base_url('/profile') ?>">Profil Saya</a>
        <?php else: ?>
            <a class="btn btn-primary" href="<?= base_url('/login') ?>">Masuk/daftar</a>
        <?php endif; ?>

    </div>
</nav>