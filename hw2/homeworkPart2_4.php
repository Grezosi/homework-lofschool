<?php


//2.4

echo date('d.m.Y H:i:s');
echo strtotime(' 24.02.2016 00:00:00');

// 2.5

$str = 'Карл у Клары украл Кораллы';
var_dump(str_replace('К', ' ', $str));

$str2 = 'Две бутылки лимонада';
var_dump(str_replace('Две','Три', $str2));


