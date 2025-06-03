<?php

    require_once '../../../model/Subkategori.php';
    $subkategori = new Subkategori();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namasubkategori = $_POST['namasubkategori'];
        $kategori = $_POST['id_kategori'];
        $id = $_POST['id'];

        $subkategori->update($kategori, $namasubkategori,  $id);
    } else {
        header('Location: ../../dashboard.php?module=subkategori&page=edit-subkategori?id='.$id);
    }