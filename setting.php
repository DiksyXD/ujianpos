<?php
$koneksi = mysqli_connect('localhost', 'admin', 'admin123', 'ujianpos');

if (!$koneksi) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
?>
