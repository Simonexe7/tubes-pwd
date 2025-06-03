<?php

require_once 'koneksi.php';

class Role extends Koneksi
{
    private $conn;

    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM role ORDER BY id DESC";

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
        $query = "SELECT * FROM role WHERE id = $id";
        
        $result = $this->conn->query($query);
        $data = array();

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }

    public function insert($namarole)
    {
        if(empty($namarole)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "INSERT INTO role (role) VALUES (?)";
            $result = $this->conn->prepare($query);
            if($result->execute([htmlspecialchars($namarole)])){
                header("Location: ../../dashboard.php?module=role&page=daftar-role");
            } else {
                echo "Gagal menambahkan role";
            }
        }
    }

    public function update($role, $id)
    {
        if(empty($role)){
            echo "Form tidak boleh kosong";
        } else {
            $query = "UPDATE role SET role = '$role' WHERE id = $id";
            $result = $this->conn->prepare($query);
            if($result->execute()){
                header("Location: ../../dashboard.php?module=role&page=daftar-role");
            } else {
                echo "Gagal mengupdate role";
            }
        }
    }

    public function delete($id)
    {   
        $query = "DELETE FROM role WHERE id = $id";
        $this->conn->query($query);
    }
}