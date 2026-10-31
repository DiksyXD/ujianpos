<?php
include_once "setting.php";

if (isset($_POST['save'])) {
    $supplier_id = (int) $_POST['supplier_id'];
    $total = (int) $_POST['total'];

    $sql = "INSERT INTO sales (supplier_id, total)
            VALUES ('$supplier_id', '$total')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['message'] = "Data penjualan berhasil ditambahkan!";
        $_SESSION['type'] = "success";

        header('location: ?m=sales');
        exit;
    } else {
        $_SESSION['message'] = "Gagal menambahkan data penjualan!";
        $_SESSION['type'] = "danger";

        header('location: ?m=sales');
        exit;
    }
}
?>