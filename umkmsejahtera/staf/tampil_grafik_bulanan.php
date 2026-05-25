<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Grafik Pembelian Bulanan</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background: #f5f6fa;
        }
        .card {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Grafik Pembelian Bulanan</h4>
        </div>
        <div class="card-body">
            <canvas id="grafikPembelian" height="120"></canvas>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {

    $.ajax({
        url: "grafik_pembelian.php",
        method: "GET",
        dataType: "json",
        success: function (data) {

            const ctx = document.getElementById("grafikPembelian").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: data.bulan,
                    datasets: [{
                        label: "Total Pembelian",
                        data: data.total,
                        backgroundColor: "rgba(54, 162, 235, 0.6)",
                        borderColor: "rgba(54, 162, 235, 1)",
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: "top"
                        },
                        title: {
                            display: true,
                            text: "Grafik Total Pembelian per Bulan"
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        },
        error: function (xhr, status, error) {
            console.error("Gagal ambil data:", error);
        }
    });

});
</script>

</body>
</html>