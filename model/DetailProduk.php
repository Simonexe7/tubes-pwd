<?php

require_once 'koneksi.php';

class DetailProduk extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT a.*, b.*, c.nama_supplier  FROM produk a JOIN detailproduk b JOIN supplier c ON a.id = b.id_produk AND b.id_supplier = c.id ORDER BY b.id DESC";

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
        $query = "SELECT a.*, b.*, c.nama_supplier  FROM produk a JOIN detailproduk b JOIN supplier c ON a.id = b.id_produk AND b.id_supplier = c.id WHERE b.id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($produk, $supplier, $deskripsi, $stok)
    {
        if(empty($produk) || empty($supplier) || empty($deskripsi) || empty($stok)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO detailproduk (id_produk, id_supplier, deskripsi, stok) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ssss', $produk, $supplier, $deskripsi, $stok);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=detailproduk&page=daftar-detailproduk");
            } else {
                echo "Gagal mengupdate detailproduk";
            }
            }
        }
    }

    public function update($produk, $supplier, $deskripsi, $stok, $id)
    {
        if(empty($produk) || empty($supplier) || empty($deskripsi) || empty($stok)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE detailproduk SET id_produk = ?, id_supplier = ?, deskripsi = ?, stok = ? WHERE id = $id";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ssss', $produk, $supplier, $deskripsi, $stok);
                if($stmt->execute()){
                    header("Location: ../../dashboard.php?module=detailproduk&page=daftar-detailproduk");
                } else {
                    echo "Gagal mengupdate detailproduk";
                }
            }
           
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM detailproduk WHERE id = $id";
        $this->conn->query($query);
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM detailproduk";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}