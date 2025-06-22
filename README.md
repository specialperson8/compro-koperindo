# Koperindo - Company Profile Website

Ini adalah project website Company Profile untuk "Koperindo", sebuah brand pabrik koper fiktif dari Indonesia. Aplikasi ini dibangun menggunakan TALL Stack (Laravel) dengan fokus pada sistem manajemen konten yang dinamis dan tampilan frontend yang profesional.

Proyek ini terinspirasi dari struktur dan desain website korporat modern seperti [SIG.id](https://www.sig.id/) dan dirancang untuk menampilkan citra perusahaan, bukan sebagai platform e-commerce.

## Fitur Utama

### Frontend (Halaman Publik)
- **Homepage Dinamis:** Menampilkan berbagai section yang kontennya dapat dikelola sepenuhnya dari admin panel.
  - **Hero Slider:** Slider gambar full-screen di bagian atas.
  - **About Teaser:** Section perkenalan singkat perusahaan.
  - **News Teaser:** Menampilkan 3 berita terbaru dari kategori "Berita Umum".
  - **Partner Slider:** Slider logo perusahaan partner/klien yang berjalan otomatis.
  - **Produk & Solusi:** Menampilkan kategori-kategori produk utama.
- **Halaman Landing Kategori Produk:** Halaman detail untuk setiap kategori produk, menampilkan deskripsi dan daftar produk di dalamnya (tanpa link ke detail lebih lanjut).
- **Sistem Berita & Artikel:**
  - Halaman daftar semua berita dengan pagination.
  - Halaman detail untuk membaca satu artikel penuh.
  - Halaman yang memfilter artikel berdasarkan kategori (Budaya Perusahaan, Infrastruktur, Inovasi).
- **Halaman Karir:** Menampilkan daftar lowongan kerja aktif dalam format accordion.
- **Halaman Statis:** Sistem halaman fleksibel untuk konten seperti "Visi & Misi", "FAQ", dll., dengan template yang bisa dipilih.
- **Desain Profesional:**
  - Dibangun dengan **Bootstrap 5** dan SCSS custom.
  - Navbar adaptif (transparan di homepage, solid di halaman lain).
  - Efek hover dan animasi yang halus.

### Backend (Admin Panel)
- Dibangun dengan **Filament v3**.
- **Dashboard Informatif:** Menampilkan statistik konten (jumlah post, produk) dan daftar data terbaru.
- **Manajemen Konten Terpusat:**
  - **Manajemen Blog:** Mengelola kategori berita dan semua jenis postingan (Berita, Budaya, Inovasi) dalam satu tempat.
  - **Manajemen Produk:** Mengelola kategori produk dan daftar produk.
  - **Manajemen Konten Halaman:** Mengelola slider, halaman statis, karir, dan partner.
- **Site Settings:** Halaman khusus untuk mengelola konten-konten statis yang tersebar di website (misal: section "About Teaser").
- **Rich Text Editor (CKEditor):** Memudahkan pengelolaan konten yang memerlukan formatting teks.

## Teknologi yang Digunakan

- **Backend:** Laravel 10
- **Frontend:** Bootstrap 5, SCSS, jQuery, Slick Carousel
- **Admin Panel:** Filament v3
- **Database:** MySQL
- **Development Environment:** Vite, Laragon (atau sejenisnya)


### Prasyarat
- PHP 8.1+
- Composer
- Node.js & NPM
- Database Server (MySQL/MariaDB)


---

Dibuat dengan semangat dan kopi.
