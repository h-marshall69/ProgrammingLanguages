<?php
class Database {
    private $host = "localhost";
    private $dbname = "sistemas";
    private $user = "root";
    private $password = "";

    public function getConnection() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname}";

            //DBH (Database Handle) nombre de variable que se suele utilizar para el objeto PDO.
            $dbh = new PDO($dsn, $this->user, $this->password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo ("Gud");
            return $dbh;
        } catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            //echo ("No gud");
            return null;
        }
    }
}


?>