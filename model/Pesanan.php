<?php

require_once 'koneksi.php';

class Pesanan extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT a.*, b.nama_produk, c.nama_supplier FROM pesanan a JOIN produk b JOIN supplier c ON a.id_produk = b.id AND a.id_supplier = c.id ORDER BY a.id DESC";

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
        $query = "SELECT a.*, b.nama_produk, c.nama_supplier FROM pesanan a JOIN produk b JOIN supplier c ON a.id_produk = b.id AND a.id_supplier = c.id WHERE a.id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($produk, $supplier, $qty)
    {
        if(empty($produk) || empty($supplier) || empty($qty)){
            echo "Form tidak boleh kosong";
        } else {
            $sql = "SELECT harga FROM produk WHERE id = $produk";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            $harga = $row["harga"];
            $total_harga = ($harga*$qty);
            $query = "INSERT INTO pesanan (id_produk, id_supplier, qty, total_harga) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('ssss', $produk, $supplier, $qty, $total_harga);
                if($stmt->execute()){
                    header("Location: ../../dashboard.php?module=pesanan&page=daftar-pesanan");
            } else {
                echo "Gagal mengupdate pesanan";
            }
            }
        }
    }

    public function update($produk, $supplier, $qty, $id)
    {
        if(empty($produk) || empty($supplier) || empty($qty)){
            echo "Form tidak boleh kosong";
        } else {
            $sql = "SELECT harga FROM produk WHERE id = $produk";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            $harga = $row["harga"];
            $total_harga = ($harga*$qty);
            $tanggal = date("Y-m-d");
            $query = "UPDATE pesanan SET id_produk = ?, id_supplier = ?, qty = ?, total_harga = ?, tanggal = ? WHERE id = $id";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('sssss', $produk, $supplier, $qty, $total_harga, $tanggal);
                if($stmt->execute()){
                    header("Location: ../../dashboard.php?module=pesanan&page=daftar-pesanan");
                } else {
                    echo "Gagal mengupdate pesanan";
                }
            }
           
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM pesanan WHERE id = $id";
        $this->conn->query($query);
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM pesanan";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}