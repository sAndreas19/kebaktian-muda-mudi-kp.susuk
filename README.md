# Sistem Informasi Persekutuan Muda-Mudi Kampung Susuk (KMKS)

<img width="1918" height="948" alt="image" src="https://github.com/user-attachments/assets/bc5add05-84bb-4a88-83c7-2bd5fe6b5636" />


## Deskripsi Singkat
Sistem Informasi KMKS adalah platform berbasis web yang responsif. KMKS (Kebaktian Muda/i Kampung Susuk) merupakan organisasi pelayanan rohani mahasiswa dan pemuda di daerah Medan. Sebelumnya, informasi jadwal ibadah, kegiatan, dan pengumuman dibagikan melalui grup media sosial yang seringkali tertumpuk oleh pesan lain. 

Proyek ini memberikan solusi terpusat dengan mengintegrasikan semua informasi penting ke dalam satu platform yang mudah diakses, dikelola, dan diperbarui secara efektif.

## Fitur Utama
- **📅 Jadwal Ibadah** – Terpusat dan mudah diakses oleh jemaat.
- **🤝 Kegiatan Persekutuan** – Manajemen acara dan kegiatan yang lebih terorganisir.
- **🗓 Kalender Acara** – Jadwal kegiatan yang terstruktur dan mudah dinavigasi.
- **📖 Renungan Harian** – Dapat diakses kapan saja untuk pertumbuhan rohani.
- **🛠 Dashboard Admin** – Manajemen konten, jadwal, dan pengumuman yang efisien.

## Teknologi yang Digunakan
- **Frontend:** HTML, CSS, Bootstrap, JavaScript
- **Backend:** PHP (Laravel Framework)
- **Database:** MySQL

## Panduan Instalasi
1. Clone repositori ini ke dalam folder lokal Anda (misal: `htdocs` jika menggunakan XAMPP atau direktori proyek Anda):  
   ```bash
   git clone https://github.com/username-anda/kmks-information-system.git
   ```
2. Buka terminal pada folder proyek dan jalankan perintah instalasi dependensi:
   ```bash
   composer install
   npm install
   npm run build
   ```
3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database Anda:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Buat database baru di MySQL dengan nama `db_kmks` (atau sesuai konfigurasi di `.env`).
5. Jalankan migrasi dan seeder untuk membangun struktur tabel dan data awal:
   ```bash
   php artisan migrate --seed
   ```
6. Jalankan server lokal:
   ```bash
   php artisan serve
   ```
7. Akses aplikasi melalui browser:
   `http://localhost:8000`

## Panduan Penggunaan
- **Akses Pengguna Umum:** Pengguna dapat langsung melihat jadwal ibadah, kegiatan, dan renungan harian dari halaman utama (Beranda).
- **Akses Admin:**
  - Gunakan Dashboard Admin untuk mengelola jadwal ibadah, kegiatan, pengumuman, dan renungan.
  - Semua perubahan yang disimpan akan langsung tampil secara real-time di halaman utama pengguna.
