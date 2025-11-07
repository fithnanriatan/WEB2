<?php 
require_once 'app/Models/Produk.php';

class ProdukController 
{   
    public function daftarProduk(){
        $produk = new Produk;
        $data = $produk->getAllProduct();
        require 'app/Views/produk_views.php';
    }
}
?>