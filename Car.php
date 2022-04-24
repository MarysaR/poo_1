<?php

class Car
{
    public string $color;
    public string $energy;
    public int $nbWheels = 4;
    public int $nbSeats = 5;
    public int $currentSpeed;
    public int $energyLevel;


    public function __construct(string $color, string $energy, int $nbSeats,)
    {
        $this->color = $color;
        $this->energy = $energy;
        $this->seats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    public function getErnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }

    public function getErnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    public function forward(): string
    {
        $this->currentSpeed = 40;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";

        return $sentence;
    }

    public function start(): string
    {
        $this->currentSpeed;
        return "Ready to go";
    }

    public function dump()
    {
    var_dump($this);
    }
}