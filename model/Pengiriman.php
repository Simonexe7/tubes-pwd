<?php

require_once 'koneksi.php';

class Pengiriman extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM pengiriman ORDER BY id DESC";

        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function getById($id)
    {
        $query = "SELECT * FROM pengiriman WHERE id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($metode)
    {
        if(empty($metode)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO pengiriman (metode) VALUES (?)";
            $result = $this->conn->prepare($query);
            if($result->execute([htmlspecialchars($metode)])){
                header("Location: ../../dashboard.php?module=pengiriman&page=daftar-pengiriman");
            } else {
                echo "Gagal menambahkan pengiriman";
            }
        }
    }

    public function update($metode, $id)
    {
        if(empty($metode)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE pengiriman SET metode = '$metode' WHERE id = $id";
            $result = $this->conn->prepare($query);
            if($result->execute()){
                header("Location: ../../dashboard.php?module=pengiriman&page=daftar-pengiriman");
            } else {
                echo "Gagal mengupdate pengiriman";
            }
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM pengiriman WHERE id = $id";
        $this->conn->query($query);
    }
}