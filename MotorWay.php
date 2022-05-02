<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle): array
    {
        $bike = new Bicycle('pink', 1, 2);
        if ($vehicle instanceof $bike) {
            echo "interdit sur l'autoroute !!" . PHP_EOL;
        }
        $this->setCurrentVehicles($vehicle);
        return $this->currentVehicles;
    }
}