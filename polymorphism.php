<?php

interface Shape {

    const PI = 3.14;

    public function calculateArea();


}

class Circle implements Shape {
    private $radius;

    public function __construct($radius0)
    {
        $this->radius = $radius0;
    }

    public function calculateArea()
    {
        return round(Shape::PI * $this->radius * $this->radius);
    }
}

class Rectangle implements Shape {
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return round($this->width * $this->length);
    }
}


$circle = new Circle(5);
echo $circle->calculateArea();