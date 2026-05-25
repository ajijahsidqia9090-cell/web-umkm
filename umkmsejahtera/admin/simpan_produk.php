<?php
include "koneksi.php";

$nama  = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok  = $_POST['stok'];

// ambil file
$nama_file = $_FILES['gambar']['name'];
$tmp       = $_FILES['gambar']['tmp_name'];

// bikin nama unik (biar tidak ketimpa)
$gambar = time() . '_' . $nama_file;

// upload
move_uploaded_file($tmp, "gambar/" . $gambar);

// simpan ke database
mysqli_query($conn,"INSERT INTO produk 
(nama_produk, harga, stok, gambar)
VALUES 
('$nama','$harga','$stok','$gambar')");

header("location:produk.php");
?>