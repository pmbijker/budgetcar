<?php
class Customer
{
    private $idNumber    ;
    private $name;
    private $address;

    public function __construct($idNumber, $name, $address)
    {
        $this->idNumber = $idNumber;
        $this->name = $name;
        $this->address = $address;
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
    
}