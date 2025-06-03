<?php

    require_once '../../../model/Subkategori.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namasubkategori = $_POST['subkategori'];
        $kategori = $_POST['id_kategori'];
        $subkategori = new Subkategori();
        $subkategori->insert($kategori,$namasubkategori);
    } else {
        header('Location: ../../dashboard.php?module=subkategori&page=tambah-subkategori');
    }