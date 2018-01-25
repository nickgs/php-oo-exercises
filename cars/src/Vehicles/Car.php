<?php

namespace Vehicles;

class Car implements CarInterface {
    private $make;
    private $model;
    
    public function __construct() {
        echo("Made a new car\n");
    }
    
    public function setMake($m) {
        $this->make = $m;
    }
    public function getMake() {
        return $this->make;
    }
    
    
    public function setModel($m) {
        $this->model = $m;
    }
}