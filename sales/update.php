<?php
include_once "setting.php";

if (isset($_POST['update'])) {
    $id = (int) $_POST['id'];
    $supplier_id = (int) $_POST['supplier_id'];
    $total = (int) $_POST['total'];

    $sql = "UPDATE sales SET supplier_id='$supplier_id', total='$total'
            WHERE id='$id'";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['message'] = "Data penjualan berhasil diperbarui!";
        $_SESSION['type'] = "success";

        header('location: ?m=sales');
        exit;
    } else {
        $_SESSION['message'] = "Gagal mengubah data penjualan!";
        $_SESSION['type'] = "danger";

        header('location: ?m=sales');
        exit;
    }
} else {
    echo 'Permintaan tidak valid';
}
?>