<?php

namespace Vehicles;

class Car {
    private $make;
    private $model;
    
    public function __construct() {
        echo("Made a new car\n");
    }
    
    public function setMake($m) {
        $this->make = $m;
    }
    
    public function setModel($m) {
        $this->model = $m;
    }
}