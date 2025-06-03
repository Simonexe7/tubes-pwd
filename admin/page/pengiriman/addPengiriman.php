<?php

    require_once '../../../model/Pengiriman.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $metode = $_POST['metode'];
        $pengiriman = new Pengiriman();
        $pengiriman->insert($metode);
    } else {
        header('Location: ../../dashboard.php?module=pengiriman&page=tambah-pengiriman');
    }