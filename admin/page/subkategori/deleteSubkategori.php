<?php
    require_once '../../../model/Subkategori.php';

    $id = $_GET['id'];
    $subkategori = new Subkategori();
    $subkategori->delete($id);
    header('Location: ../../dashboard.php?module=subkategori&page=daftar-subkategori');