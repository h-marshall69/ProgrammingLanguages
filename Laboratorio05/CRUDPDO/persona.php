<?php
require_once 'database.php';

class Persona
{
    private $db;
    private $table_name = "personas";

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function read($search = "", $start = 0, $limit = 10)
    {
        $query = "SELECT * FROM " . $this->table_name . " 
                  WHERE dni LIKE :search OR nombres LIKE :search OR apellidopa LIKE :search OR apellidoma LIKE :search 
                  LIMIT :start, :limit";
        $stmt = $this->db->prepare($query);
        $search = "%$search%";
        $stmt->bindParam(':search', $search);
        $stmt->bindValue(':start', (int)$start, PDO::PARAM_INT);
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($dni, $nombres, $apellidopa, $apellidoma)
    {
        $query = "INSERT INTO " . $this->table_name . " (dni, nombres, apellidopa, apellidoma) VALUES (:dni, :nombres, :apellidopa, :apellidoma)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidopa', $apellidopa);
        $stmt->bindParam(':apellidoma', $apellidoma);
        return $stmt->execute();
    }

    public function update($dni, $nombres, $apellidopa, $apellidoma)
    {
        $query = "UPDATE " . $this->table_name . " 
                  SET nombres = :nombres, apellidopa = :apellidopa, apellidoma = :apellidoma 
                  WHERE dni = :dni";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':nombres', $nombres);
        $stmt->bindParam(':apellidopa', $apellidopa);
        $stmt->bindParam(':apellidoma', $apellidoma);
        return $stmt->execute();
    }

    public function delete($dni)
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE dni = :dni";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':dni', $dni);
        return $stmt->execute();
    }

    public function count($search = "")
    {
        $query = "SELECT COUNT(*) as total FROM " . $this->table_name . " 
                  WHERE dni LIKE :search OR nombres LIKE :search OR apellidopa LIKE :search OR apellidoma LIKE :search";
        $stmt = $this->db->prepare($query);
        $search = "%$search%";
        $stmt->bindParam(':search', $search);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
?>
