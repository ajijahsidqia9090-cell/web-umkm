<?php
include"koneksi.php";
$query = mysqli_query($conn,"SELECT COUNT(*) as total FROM staf where role='staf'");
$data = mysqli_fetch_assoc($query);

$total_staf = $data['total'];

echo $total_staf;
?>