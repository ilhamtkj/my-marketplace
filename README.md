# Ayo baca aku

baca ini dulu sebelum menjalankan kode ini

### step 1

- harus punya git, cek dengan `git --version`
- punya php, cek dengan `php --version`
- punya composer, cek dengan `composer --version`
- pastika semuanya menghasilkan output versi masing masing program, jika output error install program yang belum ada.
- [tutorial git](https://youtu.be/fQbTeNX1mvM?si=Sj_AGv6cgb5pplTu&t=1225) , [php](https://youtu.be/TaBWhb5SPfc?si=z7ocbPFmsjsIR0U6&t=791) , [composer](https://youtu.be/hehfb2oz8xI?si=p0Lad_mKgAXf2Xeb&t=429)

### step 2

download code atau clone.  
`git clone https://github.com/ilhamtkj/my-marketplace.git`  
setelah download selesai lalu masuk ke direktori project  
`cd my-marketplace`

### step 4

setelah masuk ke direktori project install dependensi dengan composer.  
`composer install`  
lalu ketik `code .` untuk langsung membuka vscode

### step 5

copy paste atau duplikat file **env.bak** lalu rename menjadi **.env**  
didalam file **.env** ubah baris `# CI_ENVIRONMENT = production`  
menjadi `CI_ENVIRONMENT = development` (hapus # dan ubah production menjadi development)

### step 6

jalankan server dengan mengetikan di terminal:  
`php spark serve` lalu buka di browser dengan mengetikan
> localhost:8080

#### catatan

untuk mengakses halaman beranda
> localhost:8080/showtes/home

---
[original readme](README-old.md)