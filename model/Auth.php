<?php

session_start();
require_once 'koneksi.php';

class Auth extends Koneksi {
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = '".$email."'";
        $query = $this->conn->query($sql);

        if($query->num_rows > 0){
            $row = $query->fetch_array();
            if(password_verify($password, $row['password'])){
                $_SESSION['pengguna'] = $row['id_user'];
                $_SESSION['username'] = $row['username'];
                return $row['id_user'];
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function register($email, $username, $password){
        $sql = "SELECT * FROM users WHERE email = '".$email."'";
        $query = $this->conn->query($sql);

        if($query->num_rows == 0){
            $role = 4;
            $encryptPass = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (email, username, password, id_role) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            if($stmt){
                $stmt->bind_param('ssss', $email, $username, $encryptPass, $role);
                if($stmt->execute()){
                header("Location: login.php");
                } else {
                    echo "Gagal membuat akun";
                }
            }
        } else {
            echo "Email dan username sudah tersedia, silahkan gunakan email lain";
        }
    }
}