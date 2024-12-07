# PHP Native Company Profile Web App

## 1. **Pendahuluan**
Web aplikasi ini dirancang untuk menampilkan informasi perusahaan secara publik sekaligus menyediakan fitur manajemen data produk melalui admin dashboard. Teknologi yang digunakan berbasis **PHP native** dan **MySQL/MariaDB**, dengan struktur yang efisien dan mudah dikelola.

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

Database yang digunakan adalah **MySQL/MariaDB**.

### 4.1 **Tabel Admin**
Digunakan untuk autentikasi admin.
```sql
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

### 4.2 **Tabel Produk**
Digunakan untuk menyimpan data produk.
```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    category VARCHAR(255),
    image VARCHAR(255)
);
```

### 4.3 **Tabel Informasi Perusahaan**
Digunakan untuk menyimpan data tentang perusahaan.
```sql
CREATE TABLE company_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    email VARCHAR(255),
    phone VARCHAR(20),
    address TEXT,
    is_active TINYINT(1) DEFAULT 1
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
- **Database**: MySQL/MariaDB
- **Frontend**: HTML, CSS, JavaScript (opsional: Bootstrap untuk mempercepat pengembangan UI)

---

## 9. **Kesimpulan**
Konsep ini dirancang untuk menciptakan web aplikasi company profile yang sederhana namun fungsional. Dengan struktur yang modular dan efisien, pengelolaan data perusahaan serta produk dapat dilakukan dengan mudah oleh admin. Selain itu, tampilan publik yang informatif akan meningkatkan citra perusahaan kepada pengunjung.

---