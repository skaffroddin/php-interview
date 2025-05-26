<?php

// Importing the classes with their namespace
require_once 'Car.php';
require_once 'Bike.php';

use Vehicles\Car;
use Vehicles\Bike;

$car = new Car();
echo $car->drive();  // Outputs: Driving a car!

echo "<br>";

$bike = new Bike();
echo $bike->ride();  // Outputs: Riding a bike!
