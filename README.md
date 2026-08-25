# Website Profil & Sistem Informasi SDN Pendrikan Lor 02

Repositori ini memuat kode sumber untuk portal web resmi dan Sistem Manajemen Konten (CMS) Sekolah Dasar Negeri Pendrikan Lor 02 Semarang. Sistem ini dirancang untuk memberikan informasi publik yang terstruktur sekaligus memudahkan staf sekolah mengelola konten secara mandiri.

---

## ✨ Fitur Utama

- **Portal Publik (Frontend)**
  - **Beranda Dinamis:** Menampilkan *slider banner* interaktif, berita terbaru, Layanan & Program Unggulan sekolah, dan cuplikan galeri kegiatan.
  - **Layanan & Program Detail:** Konten program unggulan (seperti Akademik, Ekstrakurikuler) yang sepenuhnya dikelola dari admin, dilengkapi halaman rincian khusus dengan gambar dan penjelasan lengkap.
  - **Profil Sekolah:** Memuat sejarah, visi, misi, dan daftar fasilitas sarana prasarana sekolah secara lengkap.
  - **Galeri Cerdas (Bento Grid):** Tata letak foto galeri menggunakan desain *Bento Grid* yang rapat, estetis, dan sangat responsif di berbagai perangkat.
  - **Direktori Guru:** Menampilkan profil tenaga pendidik dan kependidikan.
  - **Pusat Informasi:** Pemisahan kategori konten menjadi Berita dan Pengumuman (termasuk akses SPMB di ujung kanan *navbar*).
  - **Hubungi Kami & Pengaduan:** Pemisahan halaman khusus untuk info kontak (Alamat & Google Maps) dan halaman formulir Pengaduan yang cepat diakses melalui *Floating Action Button* (Tombol Mengambang) interaktif di setiap halaman.
  
- **Panel Admin (Backend - Filament)**
  - **Dashboard Statistik Cerdas:** Halaman awal admin dilengkapi ringkasan data *real-time* (Total Guru, Laporan Pengaduan, Berita & Info Publikasi).
  - **Manajemen Konten:** CRUD (Create, Read, Update, Delete) untuk Berita, Pengumuman, Galeri, Program Unggulan, Fasilitas, dan Profil Guru.
  - **Pengaturan Praktis:** Mengelola visi misi, alamat, *iframe* peta, serta tautan pendaftaran SPMB tanpa menyentuh kode sedikit pun.
  - **Inboks Pengaduan:** Manajemen keluhan masyarakat dengan pelacakan status (*Pending, Diproses, Selesai*), dilengkapi **Lencana Merah (Badge Notifikasi)** untuk pesan baru yang belum dibaca.

---

## 🏗 Arsitektur Sistem

Proyek ini dibangun menggunakan teknologi web standar industri:
- **Framework Utama:** Laravel 11 (PHP 8.2+)
- **Admin Panel:** Filament PHP v3
- **Database:** MySQL
- **Frontend Styling:** Vanilla CSS (CSS Variables) dengan pola desain *Glassmorphism* modern.

### Flow Chart Arsitektur (Mermaid)

```mermaid
graph TD
    %% Entitas Pengguna
    Pengunjung([Pengunjung Publik])
    Admin([Administrator Sekolah])
    
    %% Antarmuka
    subgraph Frontend [Tampilan Publik]
        Blade[Blade Views / HTML]
        CSS[Custom UI / Swiper.js]
        Blade --- CSS
    end
    
    subgraph Backend [Filament Admin Panel]
        Dash[Dashboard & Statistik]
        CMS[Manajemen Konten / CRUD]
        Dash --- CMS
    end
    
    %% Alur Pengunjung
    Pengunjung -->|Melihat Info & Mengisi Form| Blade
    
    %% Controller / Model
    subgraph Core [Laravel Core]
        Routes[Web Routes]
        Controllers[Controllers & Form Handlers]
        Models[Eloquent Models]
        Routes --> Controllers
        Controllers --> Models
    end
    
    %% Alur Admin
    Admin -->|Login Akses| Dash
    CMS -->|Memperbarui Data| Models
    
    %% Database
    DB[(MySQL Database)]
    Models -->|Query (Baca/Tulis)| DB
    
    %% Hubungan Frontend ke Core
    Blade -.->|Menarik Data Dinamis| Routes
```

---

## 🚀 Panduan Menjalankan Program (Instalasi Lokal)

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi pada *environment local* Anda.

### Persyaratan Sistem
- **PHP:** minimal versi 8.2
- **Composer:** sudah terinstal secara global
- **Database:** MySQL atau MariaDB
- **Git:** untuk mengkloning repositori

### Langkah-langkah Instalasi

1. **Clone Repositori**
   Unduh kode sumber ke dalam komputer Anda:
   ```bash
   git clone https://github.com/imdevedugame/sd2pendrikankidul.git
   cd sd2pendrikankidul
   ```

2. **Install Dependensi**
   Pasang semua pustaka pihak ketiga yang dibutuhkan Laravel:
   ```bash
   composer install
   ```

3. **Konfigurasi Environment**
   Gandakan file `.env.example` lalu ubah namanya menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` di teks editor pilihan Anda dan sesuaikan kredensial database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sd2pendrikankidul
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Migrasi Database dan Pengisian Data (Seeding)**
   Pastikan Anda telah membuat database kosong bernama `sd2pendrikankidul` (sesuai konfigurasi `.env`). Jalankan perintah di bawah untuk membuat seluruh tabel dan mengisinya dengan data awal (*dummy* profil, berita, kontak, dll):
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Tautkan Folder Penyimpanan (Storage Link)**
   Agar gambar-gambar yang di-*upload* di Admin Panel (slider, galeri, foto guru) dapat diakses publik:
   ```bash
   php artisan storage:link
   ```

7. **Jalankan Server Lokal**
   Nyalakan *development server*:
   ```bash
   php artisan serve
   ```
   Aplikasi publik kini dapat diakses melalui peramban di: **`http://localhost:8000`**

---

## 🔐 Panduan Akses Admin Panel

Seluruh manajemen konten, tautan lomba, pembaruan peta, hingga pengelolaan aduan masyarakat dilakukan melalui Admin Panel.

- **URL Akses:** `http://localhost:8000/admin`
- **Email:** `admin@sdnpendrikanlor02.id`
- **Password:** `password`

*(Catatan: Anda dapat mengubah password ini, mengelola pengguna, dan mengubah pengaturan langsung dari menu Users di dalam panel admin).*
