<?php
include_once "setting.php";
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$sql = "SELECT * FROM suppliers WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
$r = mysqli_fetch_assoc($result);

if (!$r) {
    echo '<div class="alert alert-warning">Data supplier tidak ditemukan</div>';
} else {
?>
<div class="card">
    <div class="card-body">
        <h3>Ubah Supplier</h3>
        <form action="?m=suppliers&s=update" method="post">
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
            <div class="mb-3"><label class="form-label">Nama Supplier</label><input type="text" name="name" maxlength="50" class="form-control" value="<?= htmlspecialchars($r['name'] ?? ''); ?>" required></div>
            <div class="mb-3"><label class="form-label">Alamat</label><textarea name="address" maxlength="255" class="form-control"><?= htmlspecialchars($r['address'] ?? ''); ?></textarea></div>
            <div class="mb-3"><label class="form-label">Telepon</label><input type="text" name="phone" maxlength="50" class="form-control" value="<?= htmlspecialchars($r['phone'] ?? ''); ?>"></div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" maxlength="100" class="form-control" value="<?= htmlspecialchars($r['email'] ?? ''); ?>"></div>
            <button type="submit" name="update" class="btn btn-primary">Perbarui</button>
            <a href="?m=suppliers" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
<?php } ?>
