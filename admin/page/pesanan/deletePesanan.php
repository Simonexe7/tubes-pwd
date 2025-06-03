<?php
    require_once '../../../model/Pesanan.php';

    $id = $_GET['id'];
    $pesanan = new Pesanan();
    $pesanan->delete($id);
    header('Location: ../../dashboard.php?module=pesanan&page=daftar-pesanan');