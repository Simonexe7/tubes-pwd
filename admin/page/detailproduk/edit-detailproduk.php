<?php 

require_once '../model/DetailProduk.php';
require_once "../model/Produk.php";
require_once "../model/Supplier.php";
$id = $_GET['id'];
$detailproduk = new DetailProduk();
$produk = new Produk();
$supplier = new Supplier();
$row = $detailproduk->getById($id)[0];
$rows_p = $produk->getAll();
$rows_s = $supplier->getAll();


?>
<h2 class="mt-4 mb-4"><i class="fas fa-shopping-basket"></i> Form Edit Detail Produk</h2>

<div class="container">
    <form action="page/detailproduk/updateDetailProduk.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="mb-3 row">
        <label for="produk" class="col-sm-2 col-form-label">Produk</label>
        <div class="col-sm-10">
            <select id="produk" class="form-control" name="produk">
                <option selected value="<?= $row["id_produk"] ?>"><?= $row["nama_produk"] ?></option>
                <?php foreach ($rows_p as $row_p) : ?>
                    <option value="<?= $row_p["id"] ?>"><?= $row_p["nama_produk"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
        <div class="col-sm-10">
            <select id="supplier" class="form-control" name="supplier">
                <option selected value="<?= $row["id_supplier"] ?>"><?= $row["nama_supplier"] ?></option>
                <?php foreach ($rows_s as $row_s) : ?>
                    <option value="<?= $row_s["id"] ?>"><?= $row_s["nama_supplier"] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="deskripsi" name="deskripsi"><?= $row["deskripsi"] ?></textarea>
        </div>
        </div>
        <div class="mb-3 row">
        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="stok" name="stok" value="<?= $row["stok"] ?>">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

