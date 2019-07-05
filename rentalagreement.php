<?php
class RentalAgreement
{
    private $rentalAgreementNumber;
    private $renter;
    private $rentalAgent;
    private $rentalStartDate;
    private $carRented;
    private $dailyFee;
    private $numberOfDaysRented;

    public function __construct($rentalAgeementNumber, $renter, $rentalAgent, $rentalStartDate, $carRented, $dailyFee, $numberOfDaysRented)
    {
        $this->rentalAgreementNumber = $rentalAgeementNumber;
        $this->renter = $renter;
        $this->rentalAgent = $rentalAgent;
        $this->rentalStartDate = $rentalStartDate;
        $this->carRented = $carRented;
        $this->dailyFee = $dailyFee;
        $this->numberOfDaysRented = $numberOfDaysRented;
    }
    public function getRentalAgreementNumber()
    {
        return $this->rentalAgreementNumber;
    }
    public function setRentalAgreementNumber($rentalAgreementNumber)
    {
        $this->rentalAgreementNumber = $rentalAgreementNumber;
    }
    public function getRenter()
    {
        return $this->renter;
    }
    public function setRenter($renter)
    {
        $this->renter = $renter;
    }
    public function getRentalAgent()
    {
        return $this->rentalAgent;
    }
    public function setRentalAgent($rentalAgent)
    {
        $this->rentalAgent = $rentalAgent;
    }
    public function getRentalStartDate()
    {
        return $this->rentalStartDate;
    }
    public function setRentalStartDate($rentalStartDate)
    {
        $this->rentalStartDate = $rentalStartDate;
    }
    public function getCarRented()
    {
        return $this->carRented;
    }
    public function setCarRented($carRented)
    {
        $this->carRented = $carRented;
    }
    public function getDailyFee()
    {
        return $this->carID;
    }
    public function setDailyFee($dailyFee)
    {
        $this->$dailyFee = $dailyFee;
    }
    public function getNumberOfDaysRented()
    {
        return $this->numberOfDaysRented;
    }
    public function setNumberOfDaysRented($numberOfDaysRented)
    {
        $this->numberOfDaysRented = $numberOfDaysRented;
    }

}