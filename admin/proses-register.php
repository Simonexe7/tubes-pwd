<?php

    require_once '../model/Auth.php';
    $auth = new Auth();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $auth->register($email, $username, $password);
    } else {
        header('Location: register.php');
    }
