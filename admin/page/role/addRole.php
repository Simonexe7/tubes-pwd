<?php

    require_once '../../../model/Role.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namarole = $_POST['role'];
        $role = new Role();
        $role->insert($namarole);
    } else {
        header('Location: ../../dashboard.php?module=role&page=tambah-role');
    }