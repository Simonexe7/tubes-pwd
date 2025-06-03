<?php

    require_once '../../../model/Role.php';
    $role = new Role();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $namarole = $_POST['namarole'];
        $id = $_POST['id'];

        $role->update($namarole,  $id);
    } else {
        header('Location: ../../dashboard.php?module=role&page=edit-role?id='.$id);
    }