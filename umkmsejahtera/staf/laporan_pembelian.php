<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Laporan Pembelian</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>
<body>

<div class="container mt-5">

<h3 class="mb-4">Laporan Pembelian</h3>

<!-- FILTER -->
<form method="GET" action="" class="row g-2 mb-3">

    <div class="col-md-3">
        <input type="date" name="tgl_awal" class="form-control">
    </div>

    <div class="col-md-3">
        <input type="date" name="tgl_akhir" class="form-control">
    </div>

    <div class="col-md-2">
        <button class="btn btn-primary">Filter</button>
    </div>

</form>

<table id="tabelPembelian" class="table table-bordered table-striped">
<thead class="table-dark">
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Produk</th>
    <th>Qty</th>
    <th>Petugas</th>
</tr>
</thead>

<tbody>
<?php

$where = "";
if(!empty($_GET['tgl_awal']) && !empty($_GET['tgl_akhir'])){
    $awal = $_GET['tgl_awal'];
    $akhir = $_GET['tgl_akhir'];
    $where = "WHERE DATE(pm.tanggal) BETWEEN '$awal' AND '$akhir'";
}

$sql = "
SELECT 
pm.tanggal, 
p.nama_produk, 
d.jumlah, 
s.nama AS petugas
FROM produk_masuk pm
JOIN produk_masuk_detail d ON pm.id_masuk = d.id_masuk
JOIN produk p ON d.id_produk = p.id
LEFT JOIN staf s ON pm.id_staf = s.id
$where
ORDER BY pm.tanggal DESC
";

$query = mysqli_query($conn, $sql);

$no = 1;
while($row = mysqli_fetch_assoc($query)){
?>
<tr>
<td><?= $no++ ?></td>
<td><?= $row['tanggal'] ?></td>
<td><?= $row['nama_produk'] ?></td>
<td><?= $row['jumlah'] ?></td>
<td><?= $row['petugas'] ? $row['petugas'] : '-' ?></td>
</tr>
<?php } ?>

</tbody>
</table>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabelPembelian').DataTable();
});
</script>

</body>
</html>