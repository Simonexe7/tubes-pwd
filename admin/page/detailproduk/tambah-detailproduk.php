<?php 

require_once "../model/Produk.php";
require_once "../model/Supplier.php";
$produk = new Produk();
$supplier = new Supplier();
$rows_p = $produk->getAll();
$rows_s = $supplier->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-shopping-basket"></i> Form Tambah Detail Produk</h2>

<div class="container">
    <form action="page/detailproduk/addDetailProduk.php" method="POST">
        <div class="mb-3 row">
        <label for="produk" class="col-sm-2 col-form-label">Produk</label>
        <div class="col-sm-10">
            <select id="produk" class="form-control" name="produk">
                <?php foreach ($rows_p as $row) : ?>
                    <option value="<?= $row["id"] ?>"><?= $row["nama_produk"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
        <div class="col-sm-10">
            <select id="supplier" class="form-control" name="supplier">
                <?php foreach ($rows_s as $row) : ?>
                    <option value="<?= $row["id"] ?>"><?= $row["nama_supplier"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="stok" name="stok">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

