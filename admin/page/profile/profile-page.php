<?php

require_once '../model/koneksi.php';
$conn = new Koneksi();
$db = $conn->getConnection();
$id = $_SESSION['pengguna'];
$sql = "SELECT * FROM users WHERE id_user = $id";
$query = $db->query($sql);
$row = $query->fetch_assoc();

?>

<h2 class="mt-4 mb-4"><i class="fas fa-user"></i> Profile</h2>

<div class="container">
    <div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="username" value="<?= $row['username'] ?>">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="email" value="<?= $row['email'] ?>">
    </div>
    </div>
</div>

