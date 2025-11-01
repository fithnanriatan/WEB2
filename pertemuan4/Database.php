<?php 
class Database
{
    //properti
    public $host    = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "web_week4";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password);
        mysqli_select_db($this->connect, $this->database);

        if($this->connect->connect_error){
            die('Koneksi Gagal : ' . $this->connect->connect_error);
        }

        // echo "Koneksi Berhasil";
    }

    function getData()
    {
        $query = "SELECT * FROM tb_users";
        $result = mysqli_query($this->connect, $query);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }
}

?>