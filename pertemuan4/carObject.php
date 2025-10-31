<?php 
require_once 'Car.php';
require_once 'SportCar.php';

// mobil biasa
$car1 = new Car("Avanza", "Toyota", 2020);
echo $car1->getCar();

// mobil sport
$car2 = new SportCar("Civic", "Honda", 2021);
echo "<br>" . $car2->getCar();
echo $car2->enableTurbo();
?>