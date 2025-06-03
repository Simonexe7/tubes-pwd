<?php

    require_once '../../../model/Supplier.php';
    $supplier = new Supplier();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namasupplier = $_POST['namasupplier'];
        $id = $_POST['id'];

        $supplier->update($namasupplier,  $id);
    } else {
        header('Location: ../../dashboard.php?module=supplier&page=edit-supplier?id='.$id);
    }