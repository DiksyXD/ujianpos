<?php
include_once "setting.php";
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$sql = "DELETE FROM suppliers WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header('location: ?m=suppliers');
    exit;
} else {
    echo 'Gagal menghapus data. Pastikan supplier tidak sedang digunakan pada data penjualan.';
}
?>
