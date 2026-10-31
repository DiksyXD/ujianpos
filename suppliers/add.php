<div class="card">
    <div class="card-body">
        <h3>Tambah Supplier</h3>
        <form action="?m=suppliers&s=save" method="post">
            <div class="mb-3"><label class="form-label">Nama Supplier</label><input type="text" name="name" maxlength="50" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Alamat</label><textarea name="address" maxlength="255" class="form-control"></textarea></div>
            <div class="mb-3"><label class="form-label">Telepon</label><input type="text" name="phone" maxlength="50" class="form-control"></div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" maxlength="100" class="form-control"></div>
            <button type="submit" name="save" class="btn btn-primary">Simpan</button>
            <a href="?m=suppliers" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
