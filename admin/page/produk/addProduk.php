<?php

    require_once '../../../model/Produk.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['gambar'])){
        $namaproduk = $_POST['nama_produk'];
        $subkategori = $_POST['subkategori'];
        $harga = $_POST['harga'];
        $gambar = $_FILES['gambar'];
        $produk = new Produk();
        $produk->insert($namaproduk, $subkategori, $harga, $gambar);
    } else {
        header('Location: ../../dashboard.php?module=produk&page=tambah-produk');
    }