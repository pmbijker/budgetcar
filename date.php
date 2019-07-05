<?php
class Date
{
    private $day;
    private $month;
    private $year;
    
    public function __construct($day = 1, $month = 1, $year = 1970)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function getDay()
    {
        return $this->day;
    }
    public function setDay($day)
    {
        if ($day < 1)
        {
            $day = 1;
        }
        if ($day > 31)
        {
            $this->day = 31;
        } else {
            $this->day = $day;
        }
    }
    public function getMonth()
    {
        return $this->month;
    }
    public function setMonth($month)
    {
        if ($month < 1)
        {
            $month = 1;
        }
        if ($month > 12)
        {
            $this->month = 12;
        } else {
            $this->month = $month;
        }
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