<?php

    require_once '../../../model/Pengiriman.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $metode = $_POST['metode'];
        $id = $_POST['id'];
        $pengiriman = new Pengiriman();
        $pengiriman->update($metode, $id);
    } else {
        header('Location: ../../dashboard.php?module=pengiriman&page=edit-pengiriman'.$id);
    }