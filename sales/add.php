<?php
include_once "setting.php";
?>
<div class="card">
    <div class="card-body">
        <h3>Tambah Penjualan</h3>
        <?php
        $supplier = mysqli_query($koneksi, "SELECT * FROM suppliers ORDER BY name ASC");
        if (mysqli_num_rows($supplier) == 0) {
            echo '<div class="alert alert-warning">Tambahkan data supplier terlebih dahulu.</div>';
        } else {
        ?>
        <form action="?m=sales&s=save" method="post">
            <div class="mb-3">
                <label class="form-label">Supplier</label>
                <select name="supplier_id" class="form-select" required>
                    <option value="">Pilih Supplier</option>
                    <?php while ($s = mysqli_fetch_assoc($supplier)) { ?>
                        <option value="<?= $s['id']; ?>"><?= htmlspecialchars($s['name'] ?? ''); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3"><label class="form-label">Total Penjualan</label><input type="number" name="total" class="form-control" min="0" step="1" required></div>
            <button type="submit" name="save" class="btn btn-primary">Simpan</button>
            <a href="?m=sales" class="btn btn-secondary">Kembali</a>
        </form>
        <?php } ?>
    </div>
</div>
