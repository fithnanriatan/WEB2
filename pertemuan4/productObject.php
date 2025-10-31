<?php 
require_once 'Product.php';

$beras  = new Product('Beras', 12000);
$gula   = new Product('Gula', 8000);

echo "<h1>" . $beras->getName() . "</h1>"
?>