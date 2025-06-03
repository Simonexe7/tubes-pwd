<?php 

require_once "../model/Subkategori.php";
$subkategori = new Subkategori();
$rows = $subkategori->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-shopping-basket"></i> Form Tambah Produk</h2>

<div class="container">
    <form action="page/produk/addProduk.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3 row">
        <label for="namaproduk" class="col-sm-2 col-form-label">Nama Produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaproduk" name="nama_produk">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="subkategori" class="col-sm-2 col-form-label">Subkategori</label>
        <div class="col-sm-10">
            <select id="subkategori" class="form-control" name="subkategori">
                <?php foreach ($rows as $row) : ?>
                    <option value="<?= $row["id"] ?>"><?= $row["subkategori"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga" name="harga">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="formFile" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile" name="gambar" accept="image/*">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

