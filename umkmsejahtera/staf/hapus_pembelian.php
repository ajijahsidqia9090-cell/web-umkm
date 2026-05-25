<?php
include "koneksi.php";

// Hapus semua detail dulu
mysqli_query($conn, "DELETE FROM produk_masuk_detail");

// Hapus semua transaksi
$hapus = mysqli_query($conn, "DELETE FROM produk_masuk");

if($hapus){
    echo "<script>alert('Semua data pembelian berhasil dihapus'); window.location='index.php?menu=laporan_pembelian';</script>";
} else {
    echo "<script>alert('Gagal menghapus semua data'); window.location='index.php?menu=laporan_pembelian';</script>";
}
?>