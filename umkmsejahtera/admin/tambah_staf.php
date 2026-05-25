<!DOCTYPE html>
<html>
<head>
<title>Tambah Staf</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

<h3>Tambah Staf</h3>

<form action="simpan_staf.php" method="POST">

<input type="text" name="username" class="form-control mb-2" placeholder="Username" required>

<input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

<input type="text" name="nama" class="form-control mb-2" placeholder="Nama">

<select name="level" class="form-control mb-2" required>
    <option value="role">-- Pilih Role --</option>
    <option value="admin">Admin</option>
    <option value="staf">Staf</option>
    <option value="pemilik">Pemilik/CEO</option>
</select>

<button class="btn btn-success">Simpan</button>
<a href="staf.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</body>
</html>