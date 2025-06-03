<?php
    require_once '../../../model/Toko.php';

    $id = $_GET['id'];
    $toko = new Toko();
    $toko->delete($id);
    header('Location: ../../dashboard.php?module=toko&page=daftar-toko');