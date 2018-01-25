<?php

use PHPUnit\Framework\TestCase;

// Bring in our Super Car class.
use Vehicles\SuperCar;

final class SuperCarTest extends TestCase {
    
    /**
     * Test to ensure we can build a SuperCar.
     */
    public function testSuperCarCanBeBuilt() {
        // Instantiate a new car.
        $c = new SuperCar();
        
        // Assert that the newly built car is in fact a Car.
        $this->assertInstanceOf(SuperCar::class, $c);
    }
    
    
    /**
     * Test to ensure that the static method works.
     */
     public function testSuperCarNumProduced() {
         $c1 = new SuperCar();
         $c1->setNumProduced(20);
         
         $c2 = new SuperCar();
         $c2->setNumProduced(20);
         
         
         $this->assertEquals($c1->getNumProduced(), $c2->getNumProduced());
     }
     
     /**
      * Test calculation of the power to weight ratio
      */
      public function testSuperCarPowertoWeightCalculation() { 
        $s = new SuperCar();
        $s->setWeight(1000);
        $s->setHorsePower(300);

        $this->assertEquals($s->calcPowerToWeightRatio(), 0.3);
      }
    
}