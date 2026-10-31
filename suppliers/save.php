<?php
include_once "setting.php";

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $address = mysqli_real_escape_string($koneksi, $_POST['address']);
    $phone = mysqli_real_escape_string($koneksi, $_POST['phone']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);

    $sql = "INSERT INTO suppliers (name, address, phone, email)
            VALUES ('$name', '$address', '$phone', '$email')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['message'] = "Data supplier berhasil ditambahkan!";
        $_SESSION['type'] = "success";

        header('location: ?m=suppliers');
        exit;
    } else {
        $_SESSION['message'] = "Gagal menambahkan data supplier!";
        $_SESSION['type'] = "danger";

        header('location: ?m=suppliers');
        exit;
    }
}
?>