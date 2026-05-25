<!DOCTYPE html>
<html>
<head>

<title>Tambah Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h3 class="mb-4">Tambah Produk</h3>

<form action="simpan_produk.php" method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label class="form-label">Nama Produk</label>
<input type="text" name="nama_produk" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Harga</label>
<input type="number" name="harga" class="form-control" required>
</div>

<div class="mb-3">
<input type="hidden" name="stok" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Gambar</label>
<input type="file" name="gambar" class="form-control" required>
</div>

<div class="d-flex gap-2">

<button class="btn btn-success">
Simpan
</button>

<a href="produk.php" class="btn btn-secondary">
Kembali
</a>

</div>

</form>

</div>

</body>
</html>