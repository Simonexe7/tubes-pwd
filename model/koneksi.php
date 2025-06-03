<?php

class Koneksi {

    private $conn;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'adminecom';

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if($this->conn->connect_error){
            die("Gagal terhubung ke database");
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

// $koneksi = new Koneksi();