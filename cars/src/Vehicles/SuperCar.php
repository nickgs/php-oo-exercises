<?php

namespace Vehicles;

class SuperCar extends Car {
    
    private $numProduced;
    private $weight;
    private $horsepower;
    
    function __construct() {
        parent::__construct();
        echo ("Vrrroommm Vroommm\n");
    }
    
    public function setWeight($w) {
        $this->weight = $w;
    }
    public function getWeight() {
        return $this->weight;
    }
    
    public function setNumProduced($n) {
        $this->numProduced = $n;
    }
    public function getNumProduced() {
        return $this->numProduced;
    }
    
    public function setHorsepower($h) {
        $this->horsepower = $h;
    }
    public function getHorsepower() {
        return $this->horsepower;
    }
    
    /**
     * Calculate the power to weight ratio
     */
     public function calcPowerToWeightRatio() {
        return $this->horsepower / $this->weight; 
     }
}