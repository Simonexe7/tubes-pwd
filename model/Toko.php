<?php

require_once 'koneksi.php';

class Toko extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM toko ORDER BY id DESC";

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
        $query = "SELECT * FROM toko WHERE id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($namatoko, $alamat)
    {
        if(empty($namatoko) || empty($alamat)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO toko (nama_toko, alamat) VALUES (?, ?)";
            $result = $this->conn->prepare($query);
            if($result->execute([htmlspecialchars($namatoko), htmlspecialchars($alamat)])){
                header("Location: ../../dashboard.php?module=toko&page=daftar-toko");
            } else {
                echo "Gagal menambahkan toko";
            }
        }
    }

    public function update($namatoko, $alamat, $id)
    {
        if(empty($namatoko) || empty($alamat)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE toko SET nama_toko = '$namatoko', alamat = '$alamat' WHERE id = $id";
            $result = $this->conn->prepare($query);
            if($result->execute()){
                header("Location: ../../dashboard.php?module=toko&page=daftar-toko");
            } else {
                echo "Gagal mengupdate toko";
            }
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM toko WHERE id = $id";
        $this->conn->query($query);
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM toko";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}