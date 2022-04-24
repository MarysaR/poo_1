<?php

class Bicycle
{
    private string $color;
    private int $nbWheels;
    private int $nbSeats;
    private int $currentSpeed; 

public function __construct(string $color, int $nbWheels, int $nbSeats, int $currentSpeed)
	{
		$this->color = $color;
        $this->wheels = $nbWheels;
        $this->seats = $nbSeats;
        $this->currentSpeed = $currentSpeed;
	}
   
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }  

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $color): void
    {
        $this->currentSpeed;
    }  

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }  

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function forward(): string
    {
    $this->currentSpeed = 15;

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

    public function dump()
    {
    var_dump($this);
    }
}