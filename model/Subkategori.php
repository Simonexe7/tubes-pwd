<?php

require_once 'koneksi.php';

class Subkategori extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT a.*, b.nama_kategori FROM subkategori a JOIN kategori b ON a.id_kategori = b.id ORDER BY id DESC";

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
        $query = "SELECT a.*, b.nama_kategori FROM subkategori a JOIN kategori b ON a.id_kategori = b.id WHERE a.id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($kategori, $namasubkategori)
    {
        if(empty($kategori) || empty($namasubkategori)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO subkategori (id_kategori, subkategori) VALUES (?, ?)";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ss', $kategori, $namasubkategori);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=subkategori&page=daftar-subkategori");
                } else {
                    echo "Gagal mengupdate subkategori";
                }
            }
        }
    }

    public function update($kategori, $subkategori, $id)
    {
        if(empty($kategori) || empty($subkategori)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE subkategori SET id_kategori = ?, subkategori = ? WHERE id = $id";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ss', $kategori, $subkategori);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=subkategori&page=daftar-subkategori");
            } else {
                echo "Gagal mengupdate subkategori";
            }
            }
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM subkategori WHERE id = $id";
        $this->conn->query($query);
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM subkategori";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}