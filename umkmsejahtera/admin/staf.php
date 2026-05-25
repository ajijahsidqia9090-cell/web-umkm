<?php
include "koneksi.php";
$data = mysqli_query($conn,"SELECT * FROM staf");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Staf</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">

<h3>Data Staf</h3>

<a href="tambah_staf.php" class="btn btn-primary mb-3">+ Tambah Staf</a>
<a href="index.php?menu=home" class="btn btn-secondary mb-3">Kembali</a>

<table id="tabelStaf" class="table table-bordered table-striped">
<thead class="table-dark">
<tr>
    <th>No</th>
    <th>Username</th>
    <th>Nama</th>
    <th>Role</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php $no=1; while($d=mysqli_fetch_assoc($data)): ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['username'] ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['role'] ?></td>
<td>
    <a href="edit_staf.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapus_staf.php?id=<?= $d['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>

</table>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabelStaf').DataTable();
});
</script>

</body>
</html>