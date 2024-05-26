<?php
class Database {
    private $host = "localhost";
    private $db = "sistemas";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection() {
        $this->conn = null;
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection fallida: " . $this->conn->connect_error);
        }
        return $this->conn; 
    }
}

class Persona {
    private $conn;
    private $table_name = "personas";
    public $dni;
    public $nombres;
    public $apellidopa;
    public $apellidoma;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read($search = "", $start = 0, $limit = 10) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE dni LIKE ? OR nombres LIKE ? OR apellidopa LIKE ? OR apellidoma LIKE ? LIMIT ?, ?";
        $stmt = $this->conn->prepare($query);
        $search = "%" . $search . "%";
        $stmt->bind_param("ssssii", $search, $search, $search, $search, $start, $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET dni=?, nombres=?, apellidopa=?, apellidoma=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", $this->dni, $this->nombres, $this->apellidopa, $this->apellidoma);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nombres=?, apellidopa=?, apellidoma=? WHERE dni=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssss", $this->nombres, $this->apellidopa, $this->apellidoma, $this->dni);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE dni=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->dni);
        return $stmt->execute();
        
    }

    public function count(){
        $query = "SELECT COUNT(*) as total FROM ".$this->table_name;
        $result = $this->conn->query($query);
        $row = $result->fetch_assoc();
        return $row['total'];
    }
}
?>
