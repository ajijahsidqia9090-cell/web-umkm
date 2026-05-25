<?php
include "koneksi.php";

$id=$_GET['id'];
$data=mysqli_query($conn,"SELECT * FROM produk WHERE id='$id'");
$d=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h3>Edit Produk</h3>

<form action="update_produk.php" method="POST">

<input type="hidden" name="id" value="<?php echo $d['id']; ?>">

<div class="mb-3">
<label>Nama Produk</label>
<input type="text" name="nama_produk" class="form-control" value="<?php echo $d['nama_produk']; ?>">
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control" value="<?php echo $d['stok']; ?>">
</div>

<button class="btn btn-success">Update</button>

</form>

</div>

</body>
</html>