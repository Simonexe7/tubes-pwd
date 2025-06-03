<?php 

require_once '../model/Role.php';
$id = $_GET['id'];
$role = new Role();
$row = $role->getById($id)[0];


?>
<h2 class="mt-4 mb-4"><i class="fas fa-users"></i> Form Edit Role</h2>

<div class="container">
    <form action="page/role/updateRole.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <div class="mb-3 row">
        <label for="nama_role" class="col-sm-2 col-form-label">Nama Role</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama_role" name="namarole" value="<?= $row['role'] ?>">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

