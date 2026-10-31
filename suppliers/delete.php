<?php
include_once "setting.php";

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "DELETE FROM suppliers WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);

if ($result && mysqli_affected_rows($koneksi) > 0) {
    $_SESSION['message'] = "Data supplier berhasil dihapus!";
    $_SESSION['type'] = "success";
} else {
    $_SESSION['message'] = "Gagal menghapus data supplier!";
    $_SESSION['type'] = "danger";
}

header('location: ?m=suppliers');
exit;
?>