<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <div class="container mt-5">
        <h1>Edit Profil</h1>
        <div class="card">
            <div class="p-4 w-50">
                <form action="post">
                    <div class="mb-3">
                        <label class="form-label" for="companyName">Nama Perusahaan</label>
                        <input class="form-control" type="text" name="companyName" id="companyName" value="nama lama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="recipientName">Nama penerima</label>
                        <input class="form-control" type="text" name="recipientName" id="recipientName" value="ilham">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Telepon</label>
                        <input class="form-control" type="text" name="phone" id="phone" value="081234567890">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Alamat lengkap</label>
                        <textarea class="form-control" name="address" id="address"
                                  style="height: 20vh;">Pendrikan Kidul, Semarang Tengah, Kota Semarang, Jawa Tengah</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="postalCode">Kode Pos</label>
                        <input class="form-control" type="text" name="postalCode" id="postalCode" value="52131">
                    </div>

                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button type="button" class="btn btn-danger" onclick="history.back()">Batalkan</button>
                </form>
            </div>
        </div>

    </div>

<?= $this->endSection('content'); ?>