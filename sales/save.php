<?php
include_once "setting.php";
if (isset($_POST['save'])) {
    $supplier_id = (int) $_POST['supplier_id'];
    $total = (int) $_POST['total'];

    $sql = "INSERT INTO sales (supplier_id, total)
            VALUES ('$supplier_id', '$total')";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: ?m=sales');
        exit;
    } else {
        echo 'Gagal menyimpan data: ' . mysqli_error($koneksi);
    }
} else {
    echo 'Permintaan tidak valid';
}
?>
