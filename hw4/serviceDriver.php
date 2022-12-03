<?php

class serviceDriver implements serviceInterface
{
    protected const DRIVER = 100;
    public function apply(tariffInterface $serv)
    {
      $price =  $serv->getPrice() + self::DRIVER;
      $serv->setPrice($price);
    }
}