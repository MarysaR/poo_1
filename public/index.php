<?php

require_once '../Car.php';
require_once '../Bicycle.php';

$porsche = new Car("blue", "gazol", 5);
$bmx = new bicycle("pink", 2, 1, 20);
var_dump($porsche, $bmx);
echo $porsche->dump($porsche, $bmx);

echo $porsche->start();
echo $porsche->forward();
echo $porsche->brake();