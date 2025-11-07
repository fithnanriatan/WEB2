<?php 
require_once 'app/Models/Pelanggan.php';

class PelangganController 
{   
    public function daftarPelanggan(){
        $pelanggan = new Pelanggan;
        $data = $pelanggan->getAllPelanggan();
        require 'app/Views/pelanggan_views.php';
    }
}
?>