<?php
// KONEKSI DATABASE
$conn = mysqli_connect("localhost", "root", "", "dbumkmsejahtera");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Sejahtera</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }

        /* TOPBAR */
        .topbar {
            background: #ff5722;
            color: white;
            padding: 5px 10px;
        }

        /* HEADER */
        .header {
            background: #ff5722;
            padding: 15px;
        }

        .search-box {
            border-radius: 50px;
        }

        /* MENU */
        .menu-icon {
            background: white;
            border-radius: 12px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .menu-icon i {
            font-size: 22px;
            color: #ff5722;
        }

        /* KATEGORI */
        .kategori-card {
            background: #eee;
            border-radius: 16px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .kategori-icon {
            font-size: 40px;
            color: #ff5722;
            margin-bottom: 8px;
        }

        /* PRODUK */
        .card img {
            height: 180px;
            object-fit: cover;
        }

        .btn-primary:hover {
            transform: scale(1.03);
        }
    </style>
</head>

<body>

<!-- TOPBAR -->
<div class="topbar d-flex justify-content-between">
    <span>UMKM Sejahtera</span>
    <span>
        <a href="#" class="text-white text-decoration-none">Login</a> |
        <a href="#" class="text-white text-decoration-none">Daftar</a>
    </span>
</div>

<!-- HEADER -->
<div class="header d-flex align-items-center">
    <h2 class="text-white me-3 mb-0">UMKM</h2>
    <input type="text" class="form-control search-box me-3" placeholder="Cari produk UMKM...">
</div>

<!-- MENU -->
<div class="container mt-3">
    <div class="row text-center g-2">
        <div class="col-3">
            <div class="menu-icon">
                <i class="bi bi-shop"></i>
                <small>Toko Lokal</small>
            </div>
        </div>
        <div class="col-3">
            <div class="menu-icon">
                <i class="bi bi-bag"></i>
                <small>Produk</small>
            </div>
        </div>
        <div class="col-3">
            <div class="menu-icon">
                <i class="bi bi-cash"></i>
                <small>Pembayaran</small>
            </div>
        </div>
        <div class="col-3">
            <div class="menu-icon">
                <i class="bi bi-tags"></i>
                <small>Promo</small>
            </div>
        </div>
    </div>
</div>

<!-- KATEGORI -->
<div class="container mt-4">
    <h5>KATEGORI</h5>
    <div class="row text-center g-3">

        <div class="col-6 col-md-4 col-lg-2">
            <div class="kategori-card">
                <i class="bi bi-tv kategori-icon"></i>
                <p>Elektronik</p>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <div class="kategori-card">
                <i class="bi bi-cup-straw kategori-icon"></i>
                <p>Minuman</p>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <div class="kategori-card">
                <i class="bi bi-basket kategori-icon"></i>
                <p>Makanan</p>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <div class="kategori-card">
                <i class="bi bi-handbag kategori-icon"></i>
                <p>Fashion</p>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <div class="kategori-card">
                <i class="bi bi-house kategori-icon"></i>
                <p>Rumah Tangga</p>
            </div>
        </div>

        <div class="col-6 col-md-4 col-lg-2">
            <div class="kategori-card">
                <i class="bi bi-grid kategori-icon"></i>
                <p>Lainnya</p>
            </div>
        </div>

    </div>
</div>

<!-- PRODUK -->
<div class="container mt-4 mb-5">
    <h5>PRODUK UMKM</h5>

    <div class="row g-3">

    <?php
    $query = mysqli_query($conn, "SELECT * FROM produk ORDER BY id DESC");

    while ($data = mysqli_fetch_assoc($query)) {
    ?>

        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">

                <!-- GAMBAR -->
                <img src="admin/gambar/<?php echo $data['gambar']; ?>"
                     onerror="this.src='https://via.placeholder.com/300x200'">

                <div class="card-body d-flex flex-column">

                    <!-- NAMA -->
                    <p class="fw-semibold mb-1">
                        <?php echo $data['nama_produk']; ?>
                    </p>

                    <!-- HARGA -->
                    <p class="text-danger mb-1">
                        Rp <?php echo number_format($data['harga'],0,',','.'); ?>
                    </p>

                    <!-- STOK -->
                    <?php if ($data['stok'] <= 5) { ?>
                        <p class="text-danger mb-3">
                            Stok: <?php echo $data['stok']; ?> (Hampir Habis!)
                        </p>
                    <?php } else { ?>
                        <p class="text-muted mb-3">
                            Stok: <?php echo $data['stok']; ?>
                        </p>
                    <?php } ?>

                    <!-- BUTTON -->
                    <button class="btn btn-primary mt-auto">Beli</button>

                </div>

            </div>
        </div>

    <?php } ?>

    </div>
</div>

</body>
</html>