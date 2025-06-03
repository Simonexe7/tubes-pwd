<?php

require_once 'koneksi.php';

class Kategori extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM kategori ORDER BY id DESC";

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
        $query = "SELECT * FROM kategori WHERE id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($namakategori)
    {
        if(empty($namakategori)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO kategori (nama_kategori) VALUES (?)";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('s', $namakategori);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=kategori&page=daftar-kategori");
                } else {
                    echo "Gagal mengupdate kategori";
                }
            }
        }
    }

    public function update($kategori, $id)
    {
        if(empty($kategori)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE kategori SET nama_kategori = '?' WHERE id = $id";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('s', $kategori);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=kategori&page=daftar-kategori");
            } else {
                echo "Gagal mengupdate kategori";
            }
            }
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM kategori WHERE id = $id";
        $this->conn->query($query);
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM kategori";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}