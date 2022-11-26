<?php


//2.4

echo date('d.m.Y H:i:s');
echo strtotime(' 24.02.2016 00:00:00');

// 2.5

$str = 'Карл у Клары украл Кораллы';
var_dump(str_replace('К', ' ', $str));

$str2 = 'Две бутылки лимонада';
var_dump(str_replace('Две','Три', $str2));

//2.6

$fp = fopen('test.txt', 'a');

file_put_contents('test.txt', 'Hello again!');

fclose($fp);

task4('test.txt');

