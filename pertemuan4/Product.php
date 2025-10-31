<?php 
class Product
{
    private string $name;
    private float $price;

    function __construct(string $nama, int $harga)
    {   
        $this->name = $nama;
        $this->price = $harga;
    }

    function getName() {
        return $this->name;
    }

    function getPrice() {
        return $this->price;
    }
}
?>