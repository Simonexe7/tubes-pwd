<?php
    require_once '../../../model/Role.php';

    $id = $_GET['id'];
    $role = new Role();
    $role->delete($id);
    header('Location: ../../dashboard.php?module=role&page=daftar-role');