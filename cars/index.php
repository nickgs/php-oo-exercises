<?php

include_once(__DIR__ . "/vendor/autoload.php");

use \Vehicles\Car;

$c = new Car();

$c->setMake("Honda");
$c->setModel("Civic");


var_dump($c->make);