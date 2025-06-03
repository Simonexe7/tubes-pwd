<?php
    require_once '../../../model/Produk.php';

    $id = $_GET['id'];
    $produk = new Produk();
    $produk->delete($id);
    header('Location: ../../dashboard.php?module=produk&page=daftar-produk');