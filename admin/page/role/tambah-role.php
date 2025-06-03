<?php 

require_once "../model/Role.php";
$role = new Role();
$rows = $role->getAll();

?>
<h2 class="mt-4 mb-4"><i class="fas fa-users"></i> Form Tambah Role</h2>

<div class="container">
    <form action="page/role/addRole.php" method="POST">
        <div class="mb-3 row">
        <label for="role" class="col-sm-2 col-form-label">Nama Role</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="role" name="role">
        </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</div>

