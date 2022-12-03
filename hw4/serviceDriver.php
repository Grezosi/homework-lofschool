<?php

class serviceDriver implements serviceInterface
{
    protected const DRIVER = 100;
    public function apply(tariffInterface $serv)
    {
        $serv->setPrice(self::DRIVER);
    }
}