<?php
session_start();
include "koneksi.php";

$id_produk = $_POST['id_produk'];
$jumlah = $_POST['jumlah'];
$id_staf = $_SESSION['id']; // ⚠️ karena di tabel namanya "id"

// simpan header
mysqli_query($conn, "INSERT INTO produk_masuk (tanggal, id_staf) 
VALUES (NOW(), '$id_staf')");

$id_masuk = mysqli_insert_id($conn);

// simpan detail
mysqli_query($conn, "INSERT INTO produk_masuk_detail 
(id_masuk, id_produk, jumlah) 
VALUES 
('$id_masuk','$id_produk','$jumlah')");

// update stok
mysqli_query($conn, "UPDATE produk 
SET stok = stok + $jumlah 
WHERE id = '$id_produk'");

echo "<script>
alert('Data berhasil ditambahkan!');
location='index.php?menu=transaksimasuk';
</script>";