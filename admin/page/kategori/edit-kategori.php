<?php 

require_once '../model/Kategori.php';
$id = $_GET['id'];
$kategori = new Kategori();
$row = $kategori->getById($id)[0];

?>
<h2 class="mt-4 mb-4"><i class="fas fa-clipboard-list"></i> Form Edit kategori</h2>

<div class="container">
    <form action="page/kategori/updateKategori.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="mb-3 row">
        <label for="nama_kategori" class="col-sm-2 col-form-label">Nama kategori</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_kategori" name="namakategori" value="<?= $row['nama_kategori'] ?>">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

