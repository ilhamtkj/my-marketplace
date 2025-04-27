# Ayo baca aku

baca ini dulu sebelum menjalankan kode ini

### step 1 (persiapan)

- harus punya git, cek dengan `git --version`
- punya php, cek dengan `php --version`
- punya composer, cek dengan `composer --version`
- pastika semuanya menghasilkan output versi masing masing program, jika output error install program yang belum ada.
- [tutorial git](https://youtu.be/fQbTeNX1mvM?si=Sj_AGv6cgb5pplTu&t=1225) , [php](https://youtu.be/TaBWhb5SPfc?si=z7ocbPFmsjsIR0U6&t=791) , [composer](https://youtu.be/hehfb2oz8xI?si=p0Lad_mKgAXf2Xeb&t=429)

### step 2 (mengunduh kode)

### step 2.1

download code atau clone.  
`git clone https://github.com/ilhamtkj/my-marketplace.git`  
setelah download selesai lalu masuk ke direktori project  
`cd my-marketplace`

### step 2.2

setelah masuk ke direktori project install dependensi dengan composer.  
`composer install`  
lalu ketik `code .` untuk langsung membuka vscode

### step 2.3

copy paste atau duplikat file **env.bak** lalu rename menjadi **.env**  
didalam file **.env** ubah baris `# CI_ENVIRONMENT = production`  
menjadi `CI_ENVIRONMENT = development` (hapus # dan ubah production menjadi development)

### step 3 (menyiapkan database)

### step 3.1

jalankan database dengan xampp atau yang lain. Jika menggunakan xampp, apache tidak perlu dijalankan karena akan menggunakan server bawaan php dengan spark.

### step 3.2

buat database, nama database bebas dan file .env akan menyesuaikan.

### step 3.3

restore/import database yang berada di [/backup/db/](backups/db/)  
dengan nama my_marketplace_localhost-*******-dump.sql, ambil yang paling baru

### step 3.4 (opsional)

buat user baru untuk pengguna database dengan hak akses yang lebih sedikit(insert, select, update, delete)

### step 3.5

menyesuaikan environment  
- pada kode ini di .env disesuaikan dan hapus tanda #.  
- nama database disesuaikan dengan database yang telah dibuat di step 3.2.  
- usename dan password disesuaikan.  
- DBDriver dan DBPrefix dibiarkan.  
- port dibiarkan, biasa defaultnya 3306.

```
# database.default.hostname = localhost
# database.default.database = ci4
# database.default.username = root
# database.default.password = root
# database.default.DBDriver = MySQLi
# database.default.DBPrefix =
# database.default.port = 3306
```

### step 4 (menjalankan)

jalankan server dengan mengetikan di terminal:  
`php spark serve` lalu buka di browser dengan mengetikan
> localhost:8080

#### catatan

tidak semua button/tombol bekerja, masih dalam pengembangan.

---
[original readme](README-old.md)