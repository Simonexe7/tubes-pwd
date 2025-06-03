<?php

    session_start();
    require_once '../model/Auth.php';
    $auth = new Auth();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = $auth->login($email, $password);
        if($login){
            header("Location: dashboard.php");
        } else {
            echo 'username atau password salah';
        }
    } else {
        header('Location: login.php');
    }
