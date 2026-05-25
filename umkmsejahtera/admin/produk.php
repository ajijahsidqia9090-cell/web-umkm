<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Data Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<style>
thead{
    background:#212529;
    color:white;
}
img{
    object-fit: cover;
    border-radius: 5px;
}
</style>

</head>

<body>

<div class="container mt-4">

<h3>Data Produk</h3>

<div class="d-flex gap-2 mb-3">

<a href="index.php?menu=tambah_produk" class="btn btn-primary">
Tambah Produk
</a>

<button onclick="history.back()" class="btn btn-secondary">
Kembali
</button>

</div>

<table id="tabelProduk" class="table table-bordered table-striped">

<thead>
<tr>
<th>No</th>
<th>Gambar</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;
$data = mysqli_query($conn,"SELECT * FROM produk");

while($d = mysqli_fetch_assoc($data)){

    // PATH GAMBAR
    $gambar = $d['gambar'];
    $path = "gambar/".$gambar;
?>

<tr>

<td><?= $no++; ?></td>

<td>
<?php if(!empty($gambar) && file_exists($path)){ ?>
    <img src="<?= $path ?>" width="80" height="80">
<?php } else { ?>
    <img src="https://via.placeholder.com/80?text=No+Image">
<?php } ?>
</td>

<td><?= $d['nama_produk']; ?></td>

<td>Rp <?= number_format($d['harga'],0,',','.'); ?></td>

<td><?= $d['stok']; ?></td>

<td>

<a href="index.php?menu=edit_produk&id=<?= $d['id']; ?>" 
class="btn btn-warning btn-sm">
Edit
</a>

<a href="index.php?menu=hapus_produk&id=<?= $d['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin hapus data ini?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabelProduk').DataTable({
        "language":{
            "lengthMenu":"Tampilkan _MENU_ data",
            "search":"Cari Produk:",
            "zeroRecords":"Data tidak ditemukan",
            "info":"Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty":"Data kosong",
            "paginate":{
                "previous":"Sebelumnya",
                "next":"Berikutnya"
            }
        }
    });
});
</script>

</body>
</html>