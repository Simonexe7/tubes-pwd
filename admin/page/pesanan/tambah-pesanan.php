<?php 

require_once "../model/Produk.php";
require_once "../model/Supplier.php";
$produk = new Produk();
$supplier = new Supplier();
$rows_p = $produk->getAll();
$rows_s = $supplier->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-shopping-cart"></i> Form Tambah Pesanan</h2>

<div class="container">
    <form action="page/pesanan/addPesanan.php" method="POST">
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
        <label for="qty" class="col-sm-2 col-form-label">Qty</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qty" name="qty">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

