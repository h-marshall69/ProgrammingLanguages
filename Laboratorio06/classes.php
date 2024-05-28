<?php
class Database
{
    private $host = "localhost";
    private $db_name = "sistemas";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
}


$database = new Database();

$conn = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'GETT' && isset($_GET['action']) && $_GET['action'] === 'getDepartamentos') {
    $query = "SELECT * FROM id_Departamento, NombreDepartamento FROM Departamentos";
    $result = $conn->query($query);
    $departamentos = array();
    while ($row = $result->fetch_assoc()) {
        $departamentos[] = $row;
    }
    echo json_encode($departamentos);
}

if (
    $_POST['action'] === 'getDistritos' &&
    isset($_POST['id_Provincia'])
) {
    $id_Provincia = $_POST['id_Provincia'];
    $query = "SELECT id_Distrito, NombreDistrito FROM Distritos WHERE
id_Provincia = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_Provincia);
    $stmt->execute();
    $result = $stmt->get_result();
    $distritos = array();
    while ($row = $result->fetch_assoc()) {
        $distritos[] = $row;
    }
    echo json_encode($distritos);
}

if (
    $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) &&
    $_GET['action'] === 'getDepartamentos'
) {
    $query = "SELECT id_Departamento, NombreDepartamento FROM
Departamentos";
    $result = $conn->query($query);
    $departamentos = array();
    while ($row = $result->fetch_assoc()) {
        $departamentos[] = $row;
    }
    echo json_encode($departamentos);
}
