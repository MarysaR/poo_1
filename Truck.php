<?php
require_once 'Vehicle.php';

class Truck extends Vehicle {
    protected string $color = 'Yellow';
    protected int $nbSeats = 3;
    protected string $energy = 'fuel';
    protected string $storageCapacity;
    protected int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;
        return $this;
    }

    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity($storageCapacity, $loading)
    {
        $this->storageCapacity = $storageCapacity;
        if($loading == 0)
        {
            return "<br>" . "in Filling";
        } else {
            return "<br>" . "Full";
        }
    }

    public function getLoading()
    {
        return $this->loading;
    }

    public function setLoading($loading)
    {
        $this->loading = $loading;
        return $this;
    }
}