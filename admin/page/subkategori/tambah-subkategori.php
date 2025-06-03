<?php 

require_once "../model/Kategori.php";
$kategori = new Kategori();
$rows = $kategori->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-store"></i> Form Tambah Subkategori</h2>

<div class="container">
    <form action="page/subkategori/addSubkategori.php" method="POST">
        <div class="mb-3 row">
        <label for="subkategori" class="col-sm-2 col-form-label">Nama Subkategori</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subkategori" name="subkategori">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
            <select id="kategori" class="form-control" name="id_kategori">
                <?php foreach ($rows as $row) : ?>
                    <option value="<?= $row["id"] ?>"><?= $row["nama_kategori"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

