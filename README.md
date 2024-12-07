# PHP Native Company Profile Web App

## 1. **Pendahuluan**
Web aplikasi ini dirancang untuk menampilkan informasi perusahaan secara publik sekaligus menyediakan fitur manajemen data produk melalui admin dashboard. Teknologi yang digunakan berbasis **PHP native** dan **SQLite**, dengan struktur yang efisien dan mudah dikelola.

---

## 2. **Tujuan**
- Menyediakan platform online untuk menampilkan informasi perusahaan kepada publik.
- Mempermudah admin dalam melakukan CRUD (Create, Read, Update, Delete) data produk.
- Memberikan pengalaman pengguna yang intuitif dan responsif.

---

## 3. **Fitur Utama**

### 3.1 **Halaman Public (Landing Page)**
- Menampilkan informasi tentang perusahaan (judul, deskripsi, kontak, dll.).
- Menampilkan daftar produk yang tersedia.

### 3.2 **Admin Dashboard**
- **Autentikasi Admin**:
  - Login menggunakan email dan password.
- **Manajemen Produk**:
  - CRUD (Create, Read, Update, Delete) produk.
  - Menambahkan gambar produk.
- **Manajemen Informasi Perusahaan**:
  - CRUD informasi perusahaan.
  - Mengatur status aktif/tidak aktif informasi perusahaan.

---

## 4. **Struktur Database**

### 4.1 **Tabel Admin**
Digunakan untuk autentikasi admin.
```sql
CREATE TABLE admin (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
);
```

### 4.2 **Tabel Produk**
Digunakan untuk menyimpan data produk.
```sql
CREATE TABLE products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT,
    price REAL NOT NULL,
    stock INTEGER NOT NULL,
    category TEXT,
    image TEXT
);
```

### 4.3 **Tabel Informasi Perusahaan**
Digunakan untuk menyimpan data tentang perusahaan.
```sql
CREATE TABLE company_info (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT NOT NULL,
    email TEXT,
    phone TEXT,
    address TEXT,
    is_active INTEGER DEFAULT 1
);
```

---

## 5. **Struktur Folder**
```plaintext
.
├── index.php
├── pages/
│   ├── public/
│   │   ├── index.php
│   │   ├── about.php
│   │   └── contact.php
│   └── admin/
│       ├── dashboard.php
│       ├── login.php
│       └── manage-products.php
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── app/
│   ├── models/
│   │   ├── Admin.php
│   │   ├── Product.php
│   │   └── CompanyInfo.php
│   ├── services/
│   │   ├── AuthService.php
│   │   └── DataService.php
│   └── helpers/
│       └── Utility.php
├── db/
│   ├── database.sqlite
│   ├── dbconnection.php
│   └── migration/
│       ├── migrate-up.php
│       └── migrate-down.php
└── templates/
    ├── header.php
    └── footer.php
```

---

## 6. **Flow Aplikasi**

### 6.1 **Flow Halaman Public**
1. Pengunjung membuka website.
2. Halaman landing page menampilkan:
   - Informasi perusahaan.
   - Daftar produk.
3. Pengunjung dapat melihat detail produk tanpa login.

### 6.2 **Flow Admin Dashboard**
1. Admin membuka halaman login.
2. Admin memasukkan email dan password untuk autentikasi.
3. Setelah login, admin dapat:
   - Mengelola informasi perusahaan (edit, aktif/nonaktifkan).
   - Mengelola produk (tambah, edit, hapus).
4. Admin logout setelah selesai.

---

## 7. **Pengembangan Fitur Lanjutan (Opsional)**
- Pagination untuk daftar produk di halaman public.
- Upload multiple images untuk satu produk.
- Statistik penjualan atau data lain yang relevan di dashboard admin.

---

## 8. **Teknologi yang Digunakan**
- **Backend**: PHP native
- **Database**: SQLite
- **Frontend**: HTML, CSS, JavaScript (opsional: Bootstrap untuk mempercepat pengembangan UI)

---

## 9. **Kesimpulan**
Konsep ini dirancang untuk menciptakan web aplikasi company profile yang sederhana namun fungsional. Dengan struktur yang modular dan efisien, pengelolaan data perusahaan serta produk dapat dilakukan dengan mudah oleh admin. Selain itu, tampilan publik yang informatif akan meningkatkan citra perusahaan kepada pengunjung.

