<?php
include "koneksi.php";

$query = "
SELECT 
    MONTH(pm.tanggal) AS bulan,
    SUM(d.jumlah) AS total_jumlah
FROM produk_masuk pm
JOIN produk_masuk_detail d 
    ON pm.id_masuk = d.id_masuk
GROUP BY MONTH(pm.tanggal)
ORDER BY MONTH(pm.tanggal)
";

$result = mysqli_query($conn, $query);

// Nama bulan
$nama_bulan = [
    'Jan','Feb','Mar','Apr','Mei','Jun',
    'Jul','Agu','Sep','Okt','Nov','Des'
];

$data = [
    "bulan" => [],
    "total" => []
];

while ($row = mysqli_fetch_assoc($result)) {
    $data["bulan"][] = $nama_bulan[$row["bulan"] - 1];
    $data["total"][] = (int)$row["total_jumlah"];
}

header('Content-Type: application/json');
echo json_encode($data);
?>