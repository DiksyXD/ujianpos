<?php
include_once "setting.php";
?>
<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-8"><h3>Data Penjualan</h3></div>
            <div class="col-4"><a href="?m=sales&s=add" class="btn btn-primary float-end">Tambah Penjualan</a></div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead><tr><th>No</th><th>Supplier</th><th>Total</th><th>Aksi</th></tr></thead>
                <tbody>
                    <?php
                    $sql = "SELECT sales.*, suppliers.name FROM sales
                            JOIN suppliers ON suppliers.id = sales.supplier_id
                            ORDER BY sales.id DESC";
                    $result = mysqli_query($koneksi, $sql);
                    if ($result && mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($r = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <td>' . $no . '</td>
                                <td>' . htmlspecialchars($r['name'] ?? '') . '</td>
                                <td>Rp ' . number_format($r['total'] ?? 0, 0, ',', '.') . '</td>
                                <td>
                                    <a href="?m=sales&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Ubah</a>
                                    <a href="?m=sales&s=delete&id=' . $r['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Yakin ingin menghapus penjualan ini?\')">Hapus</a>
                                </td>
                            </tr>';
                            $no++;
                        }
                    } else {
                        echo '<tr><td colspan="4" class="text-center">Belum ada data penjualan</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
