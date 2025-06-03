<?php

    require_once '../../../model/Toko.php';
    $toko = new Toko();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namatoko = $_POST['namatoko'];
        $alamat = $_POST['alamat'];
        $id = $_POST['id'];

        $toko->update($namatoko, $alamat, $id);
    } else {
        header('Location: ../../dashboard.php?module=toko&page=edit-toko?id='.$id);
    }