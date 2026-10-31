<?php
include_once "setting.php";
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$sql = "DELETE FROM sales WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header('location: ?m=sales');
    exit;
} else {
    echo 'Gagal menghapus data: ' . mysqli_error($koneksi);
}
?>
