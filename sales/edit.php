<?php
include_once "setting.php";
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$sql = "SELECT * FROM sales WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
$r = mysqli_fetch_assoc($result);

if (!$r) {
    echo '<div class="alert alert-warning">Data penjualan tidak ditemukan</div>';
} else {
?>
<div class="card">
    <div class="card-body">
        <h3>Ubah Penjualan</h3>
        <form action="?m=sales&s=update" method="post">
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <select name="supplier_id" class="form-select" required>
                    <?php
                    $supplier = mysqli_query($koneksi, "SELECT * FROM suppliers ORDER BY name ASC");
                    while ($s = mysqli_fetch_assoc($supplier)) {
                        $selected = ($s['id'] == $r['supplier_id']) ? 'selected' : '';
                        echo '<option value="' . $s['id'] . '" ' . $selected . '>' . htmlspecialchars($s['name'] ?? '') . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3"><label class="form-label">Total Penjualan</label><input type="number" name="total" class="form-control" min="0" value="<?= $r['total']; ?>" required></div>
            <button type="submit" name="update" class="btn btn-primary">Perbarui</button>
            <a href="?m=sales" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
<?php } ?>
