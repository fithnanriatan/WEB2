<?php
class Database
{
    // properti 
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "db_oop";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password);
        mysqli_select_db($this->connect, $this->database);

        // if ($this->connect->connect_error) {
        //     # code...
        //     die("Koneksi Gagal : " . $this->connect->connect_error);
        // }
        // echo "Koneksi Berhasil";
    }

    function tampilData()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        // var_dump($rows);
        return $rows;
    }
}
