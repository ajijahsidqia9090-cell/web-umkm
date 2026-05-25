<?php
include "koneksi.php";

$id       = $_POST['id'];
$username = $_POST['username'];
$nama     = $_POST['nama'];
$role    = $_POST['role'];

mysqli_query($conn,"UPDATE staf SET 
username='$username',
nama='$nama',
role='$role'
WHERE id='$id'");

header("Location: staf.php");
?>