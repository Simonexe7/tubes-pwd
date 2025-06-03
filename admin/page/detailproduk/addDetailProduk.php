<?php

    require_once '../../../model/DetailProduk.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $produk = $_POST['produk'];
        $supplier = $_POST['supplier'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $detailProduk = new DetailProduk();
        $detailProduk->insert($produk, $supplier, $deskripsi, $stok);
    } else {
        header('Location: ../../dashboard.php?module=detailproduk&page=tambah-detailproduk');
    }