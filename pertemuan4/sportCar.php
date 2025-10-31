 <?php 
class SportCar extends Car {
    public $turbo = false;

    public function enableTurbo() {
        $this->turbo = true;
        echo "Turbo enabled!<br>";
    }
}

?>