<?php

require_once '../Car.php';
require_once '../Bicycle.php';
require_once '../Vehicle.php';
require_once '../Truck.php';
require_once '../HighWay.php';


$vehicle = new Vehicle('Blue', 3, 0, 0);
$car = new Car('green', 4, 'electric');
$bicycle = new Bicycle('Pink', 1, 2);
$truck = new Truck ('Yellow', 3, 'Fuel', 0);
$resident = new ResidentWay(2, 50);
$motor = new MotorWay (4, 130);
$pedestrian = new PedestrianWay(1, 10);

$motor->addVehicle($bike);
$pedestrian->addVehicle($car);


echo $truck->forward();
echo $truck->brake();
echo $truck->setStorageCapacity(0, 1);

var_dump($vehicle, $car, $bicycle, $truck);
var_dump(Car::ALLOWED_ENERGIES);