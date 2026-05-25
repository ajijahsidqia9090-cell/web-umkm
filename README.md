# 🛍️ UMKM Sejahtera (PHP & MySQL)

## 📖 Description

Website ini merupakan platform UMKM berbasis PHP dan MySQL yang digunakan untuk membantu pelaku usaha dalam memasarkan dan menjual produk secara online.

## Sistem ini memiliki 2 level pengguna utama yaitu:

1. Admin
2. Customer

Setiap pengguna memiliki fitur dan hak akses masing-masing untuk mengelola dan menggunakan sistem secara optimal.

## 🚀 Features
🔐 Login & Register Customer
🛍️ Katalog Produk UMKM
🔎 Pencarian Produk
🛒 Keranjang Belanja (Cart)
💳 Checkout Produk
📦 Detail Pesanan
🚚 Tracking Pesanan
🔔 Notifikasi Pesanan
🧾 Riwayat Transaksi
📊 Dashboard Admin
📦 CRUD Produk
🖼 Upload Gambar Produk
👥 Manajemen User

## 👥 User Roles
### 👑 Admin
Mengelola data produk (CRUD)
Mengelola data customer
Melihat semua pesanan
Mengubah status pesanan:
Diproses
Dikirim
Selesai
Melihat laporan transaksi
Mengelola gambar produk

### 🛍️ Customer
Register & Login akun
Melihat produk UMKM
Melihat detail produk
Menambahkan produk ke keranjang
Melakukan checkout produk
Melihat status pesanan
Tracking pengiriman
Melihat riwayat transaksi

## 📂 Project Structure

```bash
umkmsejahtera/
│
├── index.php                 → Halaman utama
│
├── auth/
│   ├── login.php             → Login user
│   ├── register.php          → Register user
│   └── logout.php            → Logout
│
├── customer/
│   ├── dashboard.php         → Halaman utama customer
│   ├── cart.php              → Keranjang belanja
│   ├── produk.php            → Daftar produk
│   ├── detail_produk.php     → Detail produk
│   ├── pesanan.php           → Daftar pesanan
│   ├── detail_pesanan.php    → Detail pesanan
│   ├── tracking.php          → Tracking pesanan
│   └── riwayat.php           → Riwayat transaksi
│
├── admin/
│   ├── dashboard.php         → Dashboard admin
│   ├── produk.php            → Kelola produk
│   ├── tambah_produk.php     → Tambah produk
│   ├── edit_produk.php       → Edit produk
│   ├── hapus_produk.php      → Hapus produk
│   ├── pesanan.php           → Kelola pesanan
│   └── user.php              → Kelola user
│
```

    
## ⚙️ Installation
Clone repository:
https://github.com/ajijahsidqia9090-cell/web-umkm.git

Pindahkan ke folder:
C:/laragon/www/
Buat database:
umkmsejahtera

Import file .sql ke phpMyAdmin

## Jalankan project:
http://localhost/umkmsejahtera

## 👨‍💻 Author
Nama: Khajizatu Sidqiyah
Kelas: Informatika - B

## 📌 Notes

Project ini dibuat untuk keperluan pembelajaran dan tugas akademik.

Sistem masih dapat dikembangkan lebih lanjut seperti:

Payment Gateway (Midtrans, QRIS, dll)
Rating & Review Produk
Notifikasi Real-time
Multi kategori produk
Dashboard statistik penjualan
