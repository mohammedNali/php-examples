<?php
namespace PHP\JustCar;

class Car {
    public $name;
    public $model;
    public $color;
    public $speed;
    public $price;


}

$my_classes = get_declared_classes();
// var_dump($my_classes);
foreach($my_classes as $class) {
    echo $class . "<br>";
}

// $car = new Car();
// $car2 = '';



if($car2 instanceof Car) {
    echo "car is an instance of Car\n";
} else {
    echo "car2 is NOT an instance of Car\n";
}



// CPU Scheduling => (p0 - p1 - p2 - p3) 
// Job Scheduling => p4 => p5 => p6
