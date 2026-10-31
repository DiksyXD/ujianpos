<?php
include_once "setting.php";
if (isset($_POST['update'])) {
    $id = (int) $_POST['id'];
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $address = mysqli_real_escape_string($koneksi, $_POST['address']);
    $phone = mysqli_real_escape_string($koneksi, $_POST['phone']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);

    $sql = "UPDATE suppliers SET name='$name', address='$address',
            phone='$phone', email='$email' WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header('location: ?m=suppliers');
        exit;
    } else {
        echo 'Gagal mengubah data: ' . mysqli_error($koneksi);
    }
} else {
    echo 'Permintaan tidak valid';
}
?>
