<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle
{
    protected string $color = 'Pink';
    protected int $nbSeats = 1;
    protected int $nbWheels = 2;

    public function __construct(string $color, int $nbSeats, int $nbWheels)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->wheels = $nbWheels;
    }
}