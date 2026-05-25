<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM staf WHERE id='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Staf</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">

<h3>Edit Staf</h3>

<form action="update_staf.php" method="POST">

<input type="hidden" name="id" value="<?= $data['id'] ?>">

<input type="text" name="username" value="<?= $data['username'] ?>" class="form-control mb-2">

<input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control mb-2">

<select name="role" class="form-control mb-2">
    <option value="Admin" <?= $data['role']=='Admin'?'selected':'' ?>>Admin</option>
    <option value="Staf" <?= $data['role']=='Staf'?'selected':'' ?>>Staf</option>
    <option value="pemilik" <?= $data['role']=='pemilik'?'selected':'' ?>>Pemilik/CEO</option>
</select>

<button class="btn btn-primary">Update</button>
<a href="staf.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</body>
</html>