<?php
require_once 'config/database.php';
require_once 'app/Controllers/ProdukController.php';
require_once 'app/Controllers/PelangganController.php';
require_once 'app/Controllers/TransaksiController.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$controller = null;

switch ($page) {
    case "produk":
        $controller = new ProdukController();
        $controller->daftarProduk();
        break;
    case "pelanggan":
        $controller = new PelangganController();
        $controller->daftarPelanggan();
        break;
    case "transaksi":
        $controller = new TransaksiController();
        $controller->daftarTransaksi();
        break;
    
    default:
        require_once 'app/Views/index.php';
        break;
}