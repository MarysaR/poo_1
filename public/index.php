<?php

require_once '../Car.php';
require_once '../Bicycle.php';
require_once '../Vehicle.php';
require_once '../Truck.php';

$vehicle = new Vehicle('Blue', 3, 0, 0);
$car = new Car('green', 4, 'electric');
$bicycle = new Bicycle('Pink', 1, 2);
$truck = new Truck ('Yellow', 3, 'Fuel', 0);

//echo $bicycle->forward();
//echo $bicycle->brake();
//echo $car->forward();
//echo $car->brake();
echo $truck->forward();
echo $truck->brake();
echo $truck->setStorageCapacity(0, 1);

var_dump($vehicle, $car, $bicycle, $truck);
var_dump(Car::ALLOWED_ENERGIES);