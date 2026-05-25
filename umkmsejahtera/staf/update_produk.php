<?php

include "koneksi.php";

$id=$_POST['id'];
$nama=$_POST['nama_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

mysqli_query($conn,"UPDATE produk SET
nama_produk='$nama',
harga='$harga',
stok='$stok'
WHERE id='$id'
");

header("location:index.php?menu=produk");

?>