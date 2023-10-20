<?php
namespace PHP\MyCar;


class Vehicle {
    protected $wheel_count;
    public $speed;
    const PI = 3.14;

    static function Hello() {
//        echo "Hello World ". Vehicle::PI;
        echo "Hello World ". self::PI;
    }

    final function greetings() {
        echo "Hello You are in $this->name in model $this->model and PI value is ". self::PI;
    }



}

class Car extends Vehicle {
    public $name;
    public $model;
    public $color;
    public $price;
    private $door_count;


    function __construct($n, $m, $c) {
        $this->name = $n;
        $this->model = $m;
        $this->color = $c;
        $this->wheel_count = 4;
//        echo "I am with $this->wheel_count Wheel";
    }


    function openDoor() {
        echo "the door is opened and PI is ". parent::PI . "<br>";
    }

//    function __destruct() {
//        echo "<br> the end of $this->name";
//    }

    function getDoorCount() {
        return $this->door_count;
    }

    function setDoorCount ($d) {
        $this->door_count = $d;
    }

}




//$bmw = new Car('bmw', 'X6', '#000000');
//echo '<br>';
//echo $bmw->name;
//
$audi = new Car('Audi', 'Y', '#ffffff');
echo '<br>';
//$audi->name = "BMW";
//echo $audi->name;
//echo '<br>';
//$audi->setDoorCount(4);
//$audi->getDoorCount();
//$audi->openDoor();



Vehicle::Hello();





?>