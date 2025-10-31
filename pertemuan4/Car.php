<?php 
class Car {
    var string $name;
    var int $year;
    var string $brand;

    public function __construct(string $name, ?string $brand, int $year) {
        $this->name     = $name;
        $this->brand    = $brand;
        $this->year     = $year;
    }

    function getCar(){
        return "Car: " . $this->name . ", Brand: " . $this->brand . ", Year: " . $this->year;
    }

    public function setMaxSpeed(int $maxSpeed) {
        echo "Setting max speed to " . $maxSpeed . " km/h<br>";
    }
}
?>