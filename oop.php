<?php 
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

$area = calculateRectangleArea(5, 3);
echo "The area of the rectangle is: $area". "<br>";


class Rectangle {
    public $length = 1;
    private $width = 1;

    public function __construct($x = null, $y = null)
    {
        $this->length = $x;
        $this->width = $y;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}


$methods = get_class_methods('Rectangle');
var_dump($methods);


// activate 
$rectangle = new Rectangle(7, 5);
$area = $rectangle->calculateArea();
echo "The area of the rectangle is: $area". "<br>";

echo $rectangle->length;

$rectangle2 = new Rectangle();
$area2 = $rectangle2->calculateArea();
echo "The area of the rectangle is: $area2". "<br>";


?>