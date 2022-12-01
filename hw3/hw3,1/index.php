<?php

require 'src/functions.php';


$names = ['Misha', 'Sasha', 'Kolya', 'Petya', 'Vasya'];

$usersArray = createArray(50, $names);
$json = json_encode($usersArray);
file_put_contents('users.json', $json);

$fp = file_get_contents('users.json');
$data = json_decode($fp, 1);
var_dump($data);

$countM = 0  ;
$countS = 0;
$countK = 0;
$countP = 0;
$countV = 0;
$avgAge = 0;

foreach ($data as $key => $value){
    $avgAge += $value['age'] / count($data);
    foreach ($value as $k => $v){
        if ($v == 'Misha') {
            $countM++;
        } elseif ($v == 'Sasha') {
            $countS++;
        } elseif ($v =='Kolya') {
            $countK++;
        } elseif ($v == 'Petya') {
            $countP++;
        } elseif ($v == 'Vasya') {
            $countV++;
        }

    }

}

echo 'Миш: ' . $countM . '<br>', 'Саш: ' . $countS . '<br>', 'Коль: '  . $countK . '<br>', 'Петь: '  . $countP . '<br>', 'Вась: '  . $countV . '<br>';
echo  'Средний возраст = ' . $avgAge;
