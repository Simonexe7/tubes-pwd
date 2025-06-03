<?php
    require_once '../../../model/Supplier.php';

    $id = $_GET['id'];
    $supplier = new Supplier();
    $supplier->delete($id);
    header('Location: ../../dashboard.php?module=supplier&page=daftar-supplier');