<?php 

class Engine {
    public $speed = 140;

    public function start() {
        echo 'Engine Started!';
    }
    public function __construct() {
        echo 'Engine Started!';
    }
}

class Car {
    public $engine;

    public function __construct() {
        $this->engine = new Engine();
    }
}

$bmw = new Car();
echo $bmw->engine->speed;



