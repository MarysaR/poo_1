<?php

class Car
{
    public string $color;
    public string $energy;
    public int $nbWheels;
    public int $nbSeats;
    public int $currentSpeed; 
    public int $energyLevel;


public function __construct(string $color, string $energy, int $nbSeats,)
	{
		$this->color = $color;
        $this->energy = $energy;
        $this->seats = $nbSeats;
	}
    public function forward() {
        
    }
    public function brake() {
    
    }
    public function start() {
    
    }

    public function getNbWheels() {
    
    }

    public function getCurrentSpeed() {
    
    }
    public function getColor() {
    
    }
    public function getNbSeats() {
    
    }
    public function getErnergy() {
    
    }
    public function getErnergyLevel() {
    
    }

}