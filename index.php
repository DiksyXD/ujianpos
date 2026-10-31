<?php
include "setting.php";

$module = isset($_GET['m']) ? $_GET['m'] : 'dashboard';

if ($module == 'dashboard') {
    $supplier = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM suppliers");
    $sales = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM sales");

    $totalSupplier = mysqli_fetch_assoc($supplier);
    $totalSales = mysqli_fetch_assoc($sales);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi POS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo (1).png" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success border-bottom shadow-sm">
        <div class="container">
            <img src="images/logo (1).png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2">
            <a class="navbar-brand" href="index.php"><b>UJIAN POS</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?m=suppliers">Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?m=sales">Penjualan</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-5">

        <?php if ($module == 'dashboard') { ?>

            <h3>Dashboard</h3>
            <p>Selamat datang di Aplikasi POS.</p>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5>Total Supplier</h5>
                            <h2><?= $totalSupplier['total']; ?></h2>
                            <a href="?m=suppliers" class="text-white">Lihat Supplier</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5>Total Penjualan</h5>
                            <h2><?= $totalSales['total']; ?></h2>
                            <a href="?m=sales" class="text-white">Lihat Penjualan</a>
                        </div>
                    </div>
                </div>
            </div>

        <?php } else { ?>

            <?php
            switch ($module) {
                case 'suppliers':
                    include "suppliers/index.php";
                    break;

                case 'sales':
                    include "sales/index.php";
                    break;

                default:
                    echo "<div class='alert alert-warning'>Halaman tidak ditemukan.</div>";
                    break;
            }
            ?>

        <?php } ?>

    </div>

    <div class="fixed-bottom bg-light border-top p-2 text-center">
        <p class="mb-0">&copy; Diki Ramdani</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>