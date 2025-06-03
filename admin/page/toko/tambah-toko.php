<h2 class="mt-4 mb-4"><i class="fas fa-store"></i> Form Tambah Toko</h2>

<div class="container">
    <form action="page/toko/addToko.php" method="POST">
        <div class="mb-3 row">
        <label for="nama_toko" class="col-sm-2 col-form-label">Nama Toko</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_toko" name="namatoko">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

