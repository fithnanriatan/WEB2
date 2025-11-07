<?php 
require_once "app/Models/Transaksi.php";

class TransaksiController
{
    public function daftarTransaksi(){
        $transaksi = new Transaksi;
        $data = $transaksi->getAllTransaksi();
        require 'app/Views/transaksi_views.php';
    }
}
?>