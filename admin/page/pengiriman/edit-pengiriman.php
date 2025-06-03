<?php 

require_once '../model/Pengiriman.php';
$id = $_GET['id'];
$pengiriman = new Pengiriman();
$row = $pengiriman->getById($id)[0];

?>
<h2 class="mt-4 mb-4"><i class="fas fa-truck"></i> Form Edit Pengiriman</h2>

<div class="container">
    <form action="page/pengiriman/updatePengiriman.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="mb-3 row">
        <label for="metode" class="col-sm-2 col-form-label">Metode</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="metode" name="metode" value="<?= $row['metode'] ?>">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

