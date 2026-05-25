<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama     = $_POST['nama'];
$role    = $_POST['role'];

mysqli_query($conn,"INSERT INTO staf VALUES (
NULL,
'$username',
'$password',
'$nama',
'$role'
)");

header("Location: staf.php");
?>