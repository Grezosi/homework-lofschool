<?php
include 'tariffInterface.php';
include 'serviceInterface.php';
include 'serviceGPS.php';
include 'abstractTariff.php';
include 'basicTariff.php';
include 'serviceDriver.php';
include 'hourTariff.php';
include 'studentTariff.php';


$basic = new basicTariff(5, 60);
$basic->addService(new serviceDriver());
$basic->addService(new serviceGPS());
echo  $basic->count();

$hourTariff = new hourTariff(5, 61);
$hourTariff->addService(new serviceGPS());
$hourTariff->addService(new serviceDriver());
echo  '<br>' . $hourTariff->count();

$studentTariff = new studentTariff(5, 60);
$studentTariff->addService(new serviceGPS());
$studentTariff->addService(new serviceDriver());
echo '<br>' . $studentTariff->count();