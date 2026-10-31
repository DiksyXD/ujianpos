<?php
include_once "setting.php";
?>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-8"><h3>Data Supplier</h3></div>
            <div class="col-4"><a href="?m=suppliers&s=add" class="btn btn-primary float-end">Tambah Supplier</a></div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th><th>Nama Supplier</th><th>Alamat</th><th>Telepon</th><th>Email</th><th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM suppliers ORDER BY id DESC";
                    $result = mysqli_query($koneksi, $sql);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <td>' . $no . '</td>
                                <td>' . htmlspecialchars($r['name'] ?? '') . '</td>
                                <td>' . htmlspecialchars($r['address'] ?? '') . '</td>
                                <td>' . htmlspecialchars($r['phone'] ?? '') . '</td>
                                <td>' . htmlspecialchars($r['email'] ?? '') . '</td>
                                <td>
                                    <a href="?m=suppliers&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Ubah</a>
                                    <a href="?m=suppliers&s=delete&id=' . $r['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus supplier ini?\')">Hapus</a>
                                </td>
                            </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="6" class="text-center">Belum ada data supplier</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
