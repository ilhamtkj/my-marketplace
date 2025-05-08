<?= $this->extend('layout/dashboard/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Terjual</th>
                        <th>Aktif</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Terjual</th>
                        <th>Aktif</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!-- looping untuk menampilkan semua produk -->
                    <?php
                    $no = 1;
                    foreach ($productData as $product): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td>
                                <img src="<?= product_image_url($product['image_name']) ?>"
                                    alt="gambar <?= $product['name'] ?>"
                                    class="object-fit-cover"
                                    style="height: 10vh;">
                            </td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['category_name'] ?></td>
                            <td>
                                Rp<?= number_format((float)$product['price'], 0, ',', '.') ?>
                            </td>
                            <td><?= $product['sold_quantity'] ?></td>
                            <td>
                                <?= $product['is_active'] ? 'aktif' : 'tidak aktif' ?>
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-2">
                                    <a class="btn btn-outline-primary" href="">edit</a>
                                    <a class="btn btn-primary"
                                        href="<?= base_url('/detail/produk') . $product['id'] ?>">
                                        lihat
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>