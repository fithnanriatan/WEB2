<?php
require_once 'config/database.php';

class Transaksi
{
    private $conn;

    public function __construct()
    {
        $database = new Database;
        $this->conn = $database->getConnection();
    }

    public function getAllTransaksi()
    {
        $query = "
            SELECT 
                t.id_transaksi,
                p.nama AS nama_pelanggan,
                b.nama AS nama_barang,
                t.jumlah,
                t.total_harga,
                t.tanggal
            FROM transaksi t
            JOIN pelanggan p ON t.id_pelanggan = p.id_pelanggan
            JOIN barang b ON t.id_barang = b.id_barang
            ORDER BY t.tanggal DESC
        ";

        $result = $this->conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
