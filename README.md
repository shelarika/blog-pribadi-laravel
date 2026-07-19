#  🖥️ Blog Bertema Teknologi Menggunakan Framework Laravel

## 📖 Deskripsi Aplikasi

Blog Bertema Teknologi merupakan aplikasi website yang dibangun menggunakan **Framework Laravel** dengan menerapkan konsep **Model-View-Controller (MVC)**. Aplikasi ini dikembangkan sebagai media untuk mengelola dan mempublikasikan artikel mengenai perkembangan teknologi informasi.

Website menyediakan halaman administrator yang digunakan untuk mengelola artikel dan kategori, sedangkan pengunjung dapat mengakses halaman blog publik untuk membaca artikel yang telah dipublikasikan tanpa harus login. Selain itu, pengunjung dapat mencari artikel berdasarkan judul, memilih artikel berdasarkan kategori, serta memberikan komentar pada artikel.

Topik artikel yang tersedia meliputi:

- 🌐 Web Development
- 🔒 Cyber Security
- 🗄️ Database
- ☁️ Cloud Computing
- 🤖 Artificial Intelligence

Project ini dibuat sebagai salah satu tugas mata kuliah **Pemrograman Web Lanjut** Program Studi Teknik Informatika Universitas Malikussaleh.

---

# ✨ Fitur Aplikasi

- 🔐 Login Administrator
- 📊 Dashboard Administrator
- 📄 CRUD Artikel
- 📂 CRUD Kategori
- 🖼️ Upload Thumbnail Artikel
- 🌐 Halaman Blog Publik
- 📖 Detail Artikel
- 🔍 Pencarian Artikel
- 🏷️ Filter Berdasarkan Kategori
- 💬 Komentar Artikel
- 👤 Edit Profil Administrator
- 🚪 Logout

---

# 🛠️ Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- HTML5
- CSS3
- Bootstrap 5
- JavaScript
- Blade Template
- Node.js
- NPM
- Vite
- Composer
- XAMPP
- Visual Studio Code
- Git
- GitHub

---

# 🚀 Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/shelarika/blog-pribadi-laravel.git
```

### 2. Masuk ke Folder Project

```bash
cd blog-pribadi-laravel
```

### 3. Install Dependency PHP

```bash
composer install
```

### 4. Install Dependency Frontend

```bash
npm install
```

### 5. Salin File Environment

```bash
cp .env.example .env
```

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Konfigurasi Database

Buka file **.env**, kemudian sesuaikan konfigurasi database MySQL.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_pribadi
DB_USERNAME=root
DB_PASSWORD=
```

### 8. Jalankan Migration

```bash
php artisan migrate
```

### 9. Buat Storage Link

```bash
php artisan storage:link
```

### 10. Jalankan Vite

```bash
npm run dev
```

### 11. Jalankan Server Laravel

```bash
php artisan serve
```

### 12. Buka Browser

```
http://127.0.0.1:8000
```

---

# 👤 Akun Demo Administrator

Gunakan akun berikut untuk mengakses Dashboard Administrator.

| Keterangan | Data |
|------------|------|
| **Email** | shela.240170032@mhs.unimal.ac.id |
| **Password** | Shela2006 |

> **Catatan:** Silakan ganti email dan password di atas dengan akun administrator yang terdapat pada aplikasi Anda.

---

# 📚 Cara Menggunakan Aplikasi

### Login Administrator

Administrator melakukan login menggunakan email dan password yang telah terdaftar. Setelah login berhasil, administrator akan diarahkan ke halaman **Dashboard Administrator**.

### Dashboard Administrator

Dashboard menampilkan ringkasan informasi aplikasi, seperti jumlah artikel, jumlah kategori, serta artikel yang telah dipublikasikan. Dashboard juga menyediakan menu untuk menuju halaman Artikel, Kategori, dan Blog.

### Kelola Artikel

Melalui menu **Artikel**, administrator dapat:

- Menambahkan artikel baru.
- Mengubah artikel.
- Menghapus artikel.
- Menentukan kategori artikel.
- Mengunggah thumbnail artikel.
- Mengubah status artikel menjadi Draft atau Published.

### Kelola Kategori

Melalui menu **Kategori**, administrator dapat:

- Menambahkan kategori.
- Mengubah kategori.
- Menghapus kategori.
- Melihat daftar kategori.

### Halaman Blog

Pengunjung dapat mengakses halaman blog tanpa login untuk:

- Melihat daftar artikel.
- Membaca detail artikel.
- Mencari artikel berdasarkan judul.
- Memfilter artikel berdasarkan kategori.
- Memberikan komentar pada artikel.

> **Seluruh proses pengelolaan artikel, kategori, upload thumbnail, dan publikasi artikel dilakukan langsung melalui antarmuka website (web browser). Administrator tidak perlu mengubah kode program di Visual Studio Code untuk mengelola data.**

---

# 🗄️ Struktur Database

Aplikasi menggunakan database **MySQL** dengan tabel utama sebagai berikut:

- users
- articles
- categories
- comments

Selain tabel utama, Laravel juga menggunakan beberapa tabel bawaan, yaitu:

- migrations
- sessions
- cache
- cache_locks
- failed_jobs
- jobs
- job_batches
- password_reset_tokens

---

# 👩‍💻 Developer

**Nama** : Shela Rika

**NIM** : 240170032

**Program Studi** : Teknik Informatika

**Universitas** : Universitas Malikussaleh

---

# 🎯 Tujuan Pengembangan

Project ini dikembangkan sebagai implementasi pembelajaran pada mata kuliah **Pemrograman Web Lanjut**. Aplikasi ini menerapkan konsep autentikasi pengguna, CRUD (Create, Read, Update, Delete), relasi database MySQL, upload file, serta pengembangan aplikasi berbasis Framework Laravel dengan arsitektur Model-View-Controller (MVC).

---

# 📄 Lisensi

Project ini dibuat untuk keperluan pembelajaran dan penyelesaian tugas mata kuliah **Pemrograman Web Lanjut** Program Studi Teknik Informatika Universitas Malikussaleh.