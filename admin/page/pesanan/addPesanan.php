<?php

    require_once '../../../model/Pesanan.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $produk = $_POST['produk'];
        $supplier = $_POST['supplier'];
        $qty = $_POST['qty'];
        $pesanan = new Pesanan();
        $pesanan->insert($produk, $supplier, $qty);
    } else {
        header('Location: ../../dashboard.php?module=pesanan&page=tambah-pesanan');
    }