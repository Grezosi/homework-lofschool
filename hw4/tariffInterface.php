<?php

interface tariffInterface
{

    public function count();
    public function addService(serviceInterface $usluga);
    public function getMunites();
    public function getDistance();
    public function getPrice();
    public function setPrice($price);

}