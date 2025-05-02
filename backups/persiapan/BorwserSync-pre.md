# Panduan Menggunakan BrowserSync di CodeIgniter 4 (CI4) di Windows

## 1. Instalasi BrowserSync
1. Pastikan Node.js sudah terinstal di komputer Anda. Jika belum, unduh dan instal dari [nodejs.org](https://nodejs.org/).
2. Instal BrowserSync secara global menggunakan npm:
    ```bash
    npm install -g browser-sync
    ```
3. Buka terminal atau Command Prompt, lalu navigasikan ke direktori proyek CI4 Anda.
4. Jalankan BrowserSync langsung di terminal tanpa file konfigurasi dengan perintah berikut:
    ```bash
    browser-sync start --proxy "http://localhost:8080" --files "./public/assets/**, ./app/Views/**"
    ```
5. BrowserSync akan membuka browser secara otomatis dan memuat aplikasi Anda. Setiap perubahan pada file yang dipantau akan memicu reload otomatis.
