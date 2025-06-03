<?php

    require_once '../../../model/Kategori.php';
    $kategori = new Kategori();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namakategori = $_POST['namakategori'];
        $id = $_POST['id'];

        $kategori->update($namakategori,  $id);
    } else {
        header('Location: ../../dashboard.php?module=kategori&page=edit-kategori?id='.$id);
    }