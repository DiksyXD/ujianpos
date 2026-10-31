<?php
include_once "setting.php";

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "DELETE FROM sales WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result && mysqli_affected_rows($koneksi) > 0) {
    $_SESSION['message'] = "Data penjualan berhasil dihapus!";
    $_SESSION['type'] = "success";
} else {
    $_SESSION['message'] = "Gagal menghapus data penjualan!";
    $_SESSION['type'] = "danger";
}

header('location: ?m=sales');
exit;
?>