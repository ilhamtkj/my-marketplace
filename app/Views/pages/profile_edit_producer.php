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
                    <label class="form-label" for="province">Provinsi</label>
                    <input class="form-control" type="text" name="province" id="province" value="belum diatur">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="city">Kota/Kabupaten</label>
                    <input class="form-control" type="text" name="city" id="city" value="belum diatur">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="contactType">Tipe kontak</label>
                    <select class="form-select" name="contactType" id="contactType">
                        <option value="1">opsi 1</option>
                        <option value="2">opsi 2</option>
                        <option value="3">opsi 3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="contact">Kontak</label>
                    <input class="form-control" type="text" name="contact" id="contact" value="081234567890">
                </div>

                <button class="btn btn-primary" type="submit">Simpan</button>
                <button type="button" class="btn btn-danger" onclick="history.back()">Batalkan</button>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection('content'); ?>