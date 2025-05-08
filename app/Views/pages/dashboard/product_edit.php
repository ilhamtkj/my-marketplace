<?= $this->extend('layout/dashboard/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit produk</h1>
    <div class="card mb-4">
        <div class="card-body">
            <div style="height: 30vh; width: 25vw;" class="mb-3">
                <img src="/assets/img/corvette.jpg" alt="" class="w-100 h-100 object-fit-cover">
            </div>

            <!-- form -->
            <form action="">
                <div class="mb-3">
                    <label class="form-label" for="name">Nama</label>
                    <input class="form-control" type="text" name="name" id="name" value="nama produk">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="price">Harga</label>
                    <input class="form-control" type="text" name="price" id="price" value="100000">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description"
                        val style="height: 20vh;">deskripsi lama</textarea>
                </div>
                <div class="mb-3">
                    <label for="category">Kategori</label>
                    <select class="form-select" name="category" id="category">
                        <option value="1" selected>Lain-lain</option>
                        <option value="2">opsi 2</option>
                        <option value="3">opsi 3</option>
                        <option value="4">opsi 4</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image">Gambar</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label class="form-label mb-0">Aktifkan atau non-aktifkan produk</label>
                    <p class="form-text">Aktif akan membuat produk bisa dilihat oleh semua orang, non-Aktif produk tidak bisa dilihat oleh orang</p>
                    <input type="radio" class="btn-check" name="is_active" value="1" id="option1" autocomplete="off" checked>
                    <label class="btn btn-outline-success" for="option1">Aktif</label>

                    <input type="radio" class="btn-check" name="is_active" value="0" id="option2" autocomplete="off">
                    <label class="btn btn-outline-danger" for="option2">Tidak Aktif</label>
                </div>

                <button class="btn btn-primary" type="submit">Simpan</button>
                <button type="button" class="btn btn-secondary" onclick="history.back()">Cancel</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>