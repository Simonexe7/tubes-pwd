<?php

    require_once '../../../model/Kategori.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namakategori = $_POST['namakategori'];
        $kategori = new Kategori();
        $kategori->insert($namakategori);
    } else {
        header('Location: ../../dashboard.php?module=kategori&page=tambah-kategori');
    }