<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay

{
    protected int $nbLane;
    protected int $maxSpeed;

    public function addVehicle(Vehicle $vehicle)
    {
        $bike = new Bicycle('pink', 1, 2);
        if ($vehicle instanceof $bike) {
            return "interdit sur l'autoroute !!" . PHP_EOL;
        } else { 
        $this->setCurrentVehicles($vehicle);
        return $this->currentVehicles;
    }
}
}