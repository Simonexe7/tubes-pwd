<?php 

require_once "../model/Supplier.php";
$supplier = new Supplier();
$rows = $supplier->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-truck"></i> Form Tambah Supplier</h2>

<div class="container">
    <form action="page/supplier/addsupplier.php" method="POST">
        <div class="mb-3 row">
        <label for="supplier" class="col-sm-2 col-form-label">Nama Supplier</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="supplier" name="supplier">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

