<?php
class Employee
{
    private $idNumber;
    private $name;
    private $address;
    private $hireDate;
    private $hourlyPayRate;

    public function __construct($idNumber, $name, $address, $hireDate, $hourlyPayRate)
    {
        $this->idNumber = $idNumber;
        $this->name = $name;
        $this->address = $address;
        $this->hireDate = $hireDate;
        $this->hourlyPayRate = $hourlyPayRate;
    }
    public function getIdNumber()
    {
        return $this->idNumber;
    }
    public function setIdNumber($idNumber)
    {
        $this->idNumber = $idNumber;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getHireDate()
    {
        return $this->hireDate;
    }
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;
    }
    public function getHourlyPayRate()
    {
        return $this->hourlyPayRate;
    }
    public function setHourlyPayRate($hourlyPayRate)
    {
        $this->hourlyPayRate = $hourlyPayRate;
    }
}