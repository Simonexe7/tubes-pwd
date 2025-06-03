<?php

require_once 'koneksi.php';

class User extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM users ORDER BY id_user DESC";

        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id_user) FROM users";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}