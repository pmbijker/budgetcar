<?php
class Automobile
{
    private $carID;
    private $make;
    private $year;

    public function __construct($carID, $make, $year)
    {
        $this->carID = $carID;
        $this->make = $make;
        $this->year = $year;
    }
    public function getCarId()
    {
        return $this->carID;
    }
    public function setCarId($carID)
    {
        $this->carID = $carID;
    }
    public function getMake()
    {   
        return $this->carIDmake;
    }
    public function setMake($carIDmake)
    {
        $this->carIDmake = $carIDmake;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
}