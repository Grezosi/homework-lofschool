<?php

abstract class abstractTariff implements tariffInterface
{
    protected $ppkm;
    protected $ppm;
    protected $km;
    protected $minutes;
    protected $services = [];
    protected $price;

    public function __construct($km, $minutes)
    {
        $this->km=$km;
        $this->minutes=$minutes;
    }

    public function count()
    {
        $this->price += $this->ppkm * $this->km + $this->ppm * $this->minutes;
       if (!empty($this->services)){
           foreach ($this->services as $service){
               $service->apply($this);
           }
       }
        return $this->price;
    }

    public function addService(serviceInterface $usluga)
    {
        $this->services[] = $usluga;
    }

    public function getMunites()
    {
        return $this->minutes;
    }

    public function getDistance()
    {
        return $this->km;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}