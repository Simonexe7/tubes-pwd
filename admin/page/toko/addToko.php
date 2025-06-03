<?php

    require_once '../../../model/Toko.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namatoko = $_POST['namatoko'];
        $alamat = $_POST['alamat'];

        $toko->insert($namatoko, $alamat);
    } else {
        header('Location: ../../dashboard.php?module=toko&page=tambah-toko');
    }