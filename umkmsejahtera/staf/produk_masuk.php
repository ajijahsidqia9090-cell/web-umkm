<?php
include "koneksi.php";
?>

<div class="container mt-4">

<h3>Transaksi Produk Masuk</h3>

<form method="POST" action="?menu=simpan_transaksi">

<div class="row">
    <div class="col-md-5">
        <select name="id_produk" class="form-control" required>
            <option value="">-- Pilih Produk --</option>
            <?php
            $produk = mysqli_query($conn,"SELECT * FROM produk");
            while($p=mysqli_fetch_assoc($produk)){
                echo "<option value='$p[id]'>$p[nama_produk]</option>";
            }
            ?>
        </select>
    </div>

    <div class="col-md-4">
        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
    </div>

    <div class="col-md-3">
        <button class="btn btn-primary">Tambah</button>
    </div>
</div>

</form>

<hr>

<table class="table table-bordered mt-3">
<tr>
    <th>No</th>
    <th>Produk</th>
    <th>Jumlah</th>
    <th>Tanggal</th>
</tr>

<?php
$no=1;

$data = mysqli_query($conn,"
SELECT 
    pm.id_masuk,
    p.nama_produk,
    d.jumlah,
    pm.tanggal
FROM produk_masuk pm
JOIN produk_masuk_detail d ON pm.id_masuk = d.id_masuk
JOIN produk p ON p.id = d.id_produk
ORDER BY pm.id_masuk DESC
");

while($d=mysqli_fetch_assoc($data)){
?>

<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama_produk'] ?></td>
<td><?= $d['jumlah'] ?></td>
<td><?= $d['tanggal'] ?></td>
</tr>

<?php } ?>

</table>

</div>