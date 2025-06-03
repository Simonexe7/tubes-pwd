<?php

require_once 'koneksi.php';

class Supplier extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM supplier ORDER BY id DESC";

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
        $query = "SELECT * FROM supplier WHERE id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($namasupplier)
    {
        if(empty($namasupplier)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO supplier (nama_supplier) VALUES (?)";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('s', $namasupplier);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=supplier&page=daftar-supplier");
                } else {
                    echo "Gagal mengupdate supplier";
                }
            }
        }
    }

    public function update($supplier, $id)
    {
        if(empty($supplier)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE supplier SET nama_supplier = ? WHERE id = $id";
            $stmt = $this->conn->prepare($query);
            if($stmt){
                $stmt->bind_param('s',$supplier);
                if($stmt->execute()){
                header("Location: ../../dashboard.php?module=supplier&page=daftar-supplier");
            } else {
                echo "Gagal mengupdate supplier";
            }
            }
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM supplier WHERE id = $id";
        $this->conn->query($query);
    }

    public function counter()
    {
        $sql = "SELECT COUNT(id) FROM supplier";
        $query = $this->conn->query($sql);
        $result = $query->fetch_column();
        return $result;
    }
}