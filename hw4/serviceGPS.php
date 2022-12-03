<?php

class serviceGPS implements serviceInterface
{
    const PRICE_PER_HOUR = 15;

    public function apply(tariffInterface $serv)
    {
        $hours = ceil($serv->getMunites() / 60);
        $price = $serv->getPrice() + (self::PRICE_PER_HOUR * $hours);
        $serv->setPrice($price);
    }
}