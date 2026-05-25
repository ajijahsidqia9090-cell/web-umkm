<?php
session_start();
$id = $_POST['produk'];
$jumlah = $_POST['jumlah'];

$_SESSION['cart'][] = [
    'produk' => $id,
    'jumlah' => $jumlah
];

header("Location:index.php?menu=transaksimasuk");
exit;
?>