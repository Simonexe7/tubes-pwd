<?php
    require_once '../../../model/Kategori.php';

    $id = $_GET['id'];
    $kategori = new Kategori();
    $kategori->delete($id);
    header('Location: ../../dashboard.php?module=kategori&page=daftar-kategori');