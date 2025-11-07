<?php 
require_once 'config/database.php';

class Pelanggan
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllPelanggan()
    {
        $query = "SELECT * FROM pelanggan";
        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>