<?php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f6fa;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Panel</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- MENU KIRI -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=produk">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?menu=staf">Staf</a>
                </li>

                <!-- DROPDOWN LAPORAN -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="laporanDropdown" role="button" data-bs-toggle="dropdown">
                        Laporan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="laporan_penjualan.php">Laporan Penjualan</a></li>
                        <li><a class="dropdown-item" href="laporan_stok.php">Laporan Stok</a></li>
                    </ul>
                </li>
            </ul>

            <!-- MENU KANAN -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="navbar-text me-3">
                        Halo, <?= $_SESSION['nama']; ?>
                    </span>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<?php 
include"menu.php";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<?php 
include"footer.php";
?>

</body>
</html>