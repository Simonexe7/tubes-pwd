<?php 

require_once '../model/Produk.php';
require_once "../model/Subkategori.php";
$id = $_GET['id'];
$produk = new Produk();
$subkategori = new Subkategori();
$row = $produk->getById($id)[0];
$rows = $subkategori->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-shopping-basket"></i> Form Edit Produk</h2>

<div class="container">
    <form action="page/produk/updateProduk.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="mb-3 row">
        <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_produk" name="namaproduk" value="<?= $row['nama_produk'] ?>">
        </div>
        </div>
        <div class="mb-3 row">
        <label for="subkategori" class="col-sm-2 col-form-label">Subkategori</label>
        <div class="col-sm-10">
            <select id="subkategori" class="form-control" name="subkategori">
                <option selected value="<?= $row["id_subkategori"] ?>"><?= $row["subkategori"] ?></option>
                <?php foreach ($rows as $row_sk) : ?>
                    <option value="<?= $row_sk["id"] ?>"><?= $row_sk["subkategori"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="harga" name="harga" value="<?= $row['harga'] ?>">
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

