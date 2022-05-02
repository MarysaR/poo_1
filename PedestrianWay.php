<?php 

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle): array
    {
        $car = new Car('green',4,"electric");
        if($vehicle instanceof $car) {
            echo "A pied !" . PHP_EOL;
        }
        $this->setCurrentVehicles($vehicle);
        return $this->currentVehicles;
    }
}