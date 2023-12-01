<?php
class conexion{
    private $host= "localhost";
    private $dbname="users";
    private $user="root";
    private $password="";
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function getConexion() {
        return $this->pdo;
    }




}
?>
