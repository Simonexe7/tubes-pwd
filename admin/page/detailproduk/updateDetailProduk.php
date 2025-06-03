<?php

    require_once '../../../model/DetailProduk.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $produk = $_POST['produk'];
        $supplier = $_POST['supplier'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $detailProduk = new DetailProduk();
        $detailProduk->update($produk, $supplier, $deskripsi, $stok, $id);
    } else {
        header('Location: ../../dashboard.php?module=detailproduk&page=edit-detailproduk&id='.$id);
    }