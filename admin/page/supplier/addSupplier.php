<?php

    require_once '../../../model/Supplier.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namasupplier = $_POST['supplier'];
        $supplier = new Supplier();
        $supplier->insert($namasupplier);
    } else {
        header('Location: ../../dashboard.php?module=supplier&page=tambah-supplier');
    }