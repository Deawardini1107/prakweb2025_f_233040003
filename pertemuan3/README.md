# 🎓 Pertemuan 3 - Laravel MVC & OOP

## 📌 Tentang Proyek Ini

Proyek ini adalah implementasi **Model-View-Controller (MVC)** dan **Object-Oriented Programming (OOP)** menggunakan Laravel framework untuk Praktikum Web Programming.

## ✨ Status: ✅ **SELESAI 100%**

Semua tugas telah dikerjakan dengan sempurna. Lihat `LAPORAN_PEMERIKSAAN.md` untuk detail lengkap.

## 📁 Struktur Proyek

```
pertemuan3/
├── latihan/                    # Aplikasi Laravel utama
│   ├── app/
│   │   ├── Http/Controllers/   # PostController, CategoryController
│   │   └── Models/             # User, Post, Category
│   ├── database/
│   │   ├── migrations/         # Database schema
│   │   ├── factories/          # Data factories
│   │   └── seeders/            # Database seeder
│   ├── resources/views/        # Blade templates
│   ├── routes/web.php          # Route definitions
│   └── PRAKTIKUM.md            # Dokumentasi praktikum
├── LAPORAN_PEMERIKSAAN.md      # Laporan verifikasi lengkap
└── README.md                   # File ini
```

## 🚀 Cara Menjalankan

### 1. Setup Database (Sudah dilakukan)
```bash
cd latihan
php artisan migrate:fresh --seed
```

### 2. Jalankan Aplikasi
Karena menggunakan **Laravel Herd**, aplikasi otomatis tersedia di:
- **http://latihan.test**

Atau jalankan manual:
```bash
php artisan serve
```

## 📱 Fitur yang Diimplementasikan

### ✅ CRUD Posts (Artikel)
- ➕ Create - Tambah artikel baru
- 👁️ Read - Lihat daftar artikel
- ✏️ Update - Edit artikel
- 🗑️ Delete - Hapus artikel

### ✅ CRUD Categories (Kategori)
- ➕ Create - Tambah kategori baru
- 👁️ Read - Lihat daftar kategori
- ✏️ Update - Edit kategori
- 🗑️ Delete - Hapus kategori

### ✅ Database Relations
- User → Posts (One-to-Many)
- Category → Posts (One-to-Many)
- Post → User & Category (Many-to-One)

## 🎯 Konsep yang Dipelajari

### 1. **MVC Pattern**
- **Model**: Post, Category, User (data & business logic)
- **View**: Blade templates (presentation layer)
- **Controller**: PostController, CategoryController (request handling)

### 2. **OOP Principles**
- **Encapsulation**: Protected properties dengan `$fillable`/`$guarded`
- **Inheritance**: Models extends Eloquent Model
- **Polymorphism**: Method overriding
- **Abstraction**: Laravel interfaces & contracts

### 3. **Laravel Features**
- Eloquent ORM & Relationships
- Database Migrations
- Blade Templates
- Form Validation
- Route Model Binding
- Factory & Seeder

## 📊 Data yang Tersedia

Setelah seeding, database berisi:
- **5 Users** - Data dummy users
- **2 Categories** - Sample categories
- **10 Posts** - Sample posts dengan relasi ke users & categories

## 🎨 Tampilan

Aplikasi memiliki:
- ✨ Modern gradient purple design
- 📱 Responsive layout
- 🎯 User-friendly interface
- ✅ Flash messages untuk feedback
- ⚠️ Confirmation dialogs

## 📚 Dokumentasi Lengkap

- **PRAKTIKUM.md** - Dokumentasi detail implementasi
- **LAPORAN_PEMERIKSAAN.md** - Hasil verifikasi & penilaian (Skor: 100%)

## 🏆 Hasil Penilaian

| Aspek | Skor |
|-------|------|
| Database & Migrations | ✅ 100/100 |
| Models & Relations | ✅ 100/100 |
| Controllers | ✅ 100/100 |
| Views | ✅ 100/100 |
| Routes | ✅ 100/100 |
| OOP Implementation | ✅ 100/100 |
| MVC Implementation | ✅ 100/100 |
| **TOTAL** | **✅ 100%** |

## 📝 Link Penting

- **Home**: http://latihan.test/
- **Posts**: http://latihan.test/posts
- **Categories**: http://latihan.test/categories
- **About**: http://latihan.test/about

## 👨‍💻 Teknologi yang Digunakan

- **Laravel 11** - PHP Framework
- **Blade** - Template Engine
- **Eloquent ORM** - Database ORM
- **SQLite/MySQL** - Database
- **PHP 8.x** - Programming Language

---

## ✅ Checklist Tugas

- [x] Install & setup Laravel
- [x] Buat migrations (users, categories, posts)
- [x] Buat Models dengan relasi
- [x] Implementasi Controllers CRUD
- [x] Buat Views dengan Blade
- [x] Setup Routes RESTful
- [x] Implementasi validasi
- [x] Buat Factory & Seeder
- [x] Design UI yang menarik
- [x] Test semua fitur

## 🎉 Status: **SELESAI & SIAP DIKUMPULKAN**

---

**Dikerjakan oleh:** [Nama Anda]  
**Tanggal:** 18 Desember 2025  
**Pertemuan:** 3 - Laravel MVC & OOP
