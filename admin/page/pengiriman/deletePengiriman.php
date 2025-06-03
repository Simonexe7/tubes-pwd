<?php
    require_once '../../../model/Pengiriman.php';

    $id = $_GET['id'];
    $pengiriman = new Pengiriman();
    $pengiriman->delete($id);
    header('Location: ../../dashboard.php?module=pengiriman&page=daftar-pengiriman');