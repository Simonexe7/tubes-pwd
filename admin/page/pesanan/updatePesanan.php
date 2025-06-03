<?php

    require_once '../../../model/Pesanan.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $produk = $_POST['produk'];
        $supplier = $_POST['supplier'];
        $qty = $_POST['qty'];
        $pesanan = new Pesanan();
        $pesanan->update($produk, $supplier, $qty, $id);
    } else {
        header('Location: ../../dashboard.php?module=pesanan&page=edit-pesanan&id='.$id);
    }