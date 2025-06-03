<?php
    require_once '../../../model/DetailProduk.php';

    $id = $_GET['id'];
    $detailproduk = new DetailProduk();
    $detailproduk->delete($id);
    header('Location: ../../dashboard.php?module=detailproduk&page=daftar-detailproduk');