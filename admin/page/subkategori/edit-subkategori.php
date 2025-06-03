<?php 

require_once '../model/Subkategori.php';
require_once '../model/Kategori.php';
$id = $_GET['id'];
$subkategori = new Subkategori();
$kategori = new Kategori();
$row_sk = $subkategori->getById($id)[0];
$rows = $kategori->getAll();


?>
<h2 class="mt-4 mb-4"><i class="fas fa-clipboard-list"></i> Form Edit Subkategori</h2>

<div class="container">
    <form action="page/subkategori/updatesubkategori.php" method="POST">
        <input type="hidden" name="id" value="<?= $row_sk['id'] ?>">
        <div class="mb-3 row">
        <label for="nama_subkategori" class="col-sm-2 col-form-label">Nama Subkategori</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_subkategori" name="namasubkategori" value="<?= $row_sk['subkategori'] ?>">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
            <select id="kategori" class="form-control" name="id_kategori">
                <option selected value="<?= $row_sk["id"] ?>"><?= $row_sk["nama_kategori"] ?></option>
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

