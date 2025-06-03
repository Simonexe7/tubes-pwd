<?php

    require_once '../../../model/Produk.php';
    $produk = new Produk();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['gambar'])){
        $id = $_POST['id'];
        $namaproduk = $_POST['namaproduk'];
        $subkategori = $_POST['subkategori'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar'];
        $produk = new Produk();
        $produk->update($namaproduk, $subkategori, $harga, $gambar, $id);
    } else {
        header('Location: ../../dashboard.php?module=produk&page=edit-produk&id='.$id);
    }