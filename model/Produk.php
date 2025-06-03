<?php

require_once 'koneksi.php';

class Produk extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT a.*, b.subkategori FROM produk a JOIN subkategori b ON a.id_subkategori = b.id ORDER BY a.id DESC";

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
        $query = "SELECT a.*, b.subkategori FROM produk a JOIN subkategori b ON a.id_subkategori = b.id WHERE a.id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($namaproduk, $subkategori, $harga, $gambar)
    {
        if(empty($namaproduk) || empty($subkategori) || empty($harga) || empty($gambar)){
            echo "Form tidak boleh kosong";
        } else {
            $namagambar = $this->upload($gambar);
            $query = "INSERT INTO produk (nama_produk, id_subkategori, harga, gambar) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ssss', $namaproduk, $subkategori, $harga, $namagambar);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=produk&page=daftar-produk");
            } else {
                echo "Gagal mengupdate produk";
            }
            }
        }
    }

    public function update($produk, $subkategori, $harga, $gambar, $id)
    {
        if(empty($produk) || empty($subkategori) || empty($harga) || empty($gambar)){
            echo "Form tidak boleh kosong";
        } else {
            $namagambar = $this->upload($gambar);
            $query = "UPDATE produk SET nama_produk = ?, id_subkategori = ?, harga = ?, gambar = ? WHERE id = $id";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ssss', $produk, $subkategori, $harga, $namagambar);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=produk&page=daftar-produk");
            } else {
                echo "Gagal mengupdate produk";
            }
            }
           
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM produk WHERE id = $id";
        $this->conn->query($query);
    }

    public function upload($file) {
        if (!isset($file) || $file['error'] != 0) {
            return "File tidak valid atau terjadi kesalahan saat upload.";
        }

        $originalName = basename($file["name"]);
        $tmpName = $file["tmp_name"];

        $uniqueName = uniqid() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", $originalName);
        $targetPath = "../../../img/" . $uniqueName;
        $newGambar = $uniqueName;

        if (!move_uploaded_file($tmpName, $targetPath)) {
            return "Gagal memindahkan file ke folder upload.";
        }

        return $newGambar;
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM produk";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}