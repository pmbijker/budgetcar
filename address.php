<?php
class Address
{
    private $streetAddress;
    private $city;
    private $zipcode;
    
    public function __construct($streetAddress, $city, $zipcode)
    {
        $this->streetAddress = $streetAddress;
        $this->city = $city;
        $this->zipcode = $zipcode;
    }
    public function getStreetAddress(){
        return $this->streetAddress;
    }
    public function setStreetAddress($streetAddress){
        $this->streetAddress = $streetAddress;
    }
    public function getCity(){
        return $this->city;
    }
    public function setCity($city){
        $this->city = $city;
    }
    public function getZipcode(){
        return $this->zipcode;
    }
    public function setZipcode($zipcode){
        $this->zipcode = $zipcode;
    }
}