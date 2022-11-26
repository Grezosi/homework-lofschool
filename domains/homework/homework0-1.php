<?php


// 0

const TESTCONSTANTA = 'asd';

$user_name = "Igor";

function show_something(): string
{
    return 'SOMETHING';
}

if (1 == 2) {
    echo 'hi';
}

// 1.1

$name = "Mikhail";

$age = 25;

echo "Меня зовут $name, мне $age лет<br>";

echo "\!|/’”\\ <br>";

//1.2

const TOTAL = 80;

const MARKERS = 23;

const PENCILS = 40;

const PAINT = TOTAL - MARKERS - PENCILS;

echo  PAINT . "<br>";

// 1.3

$age = mt_rand(0, 100);

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать<br>";
} elseif ($age > 65) {
    echo "Вам пора на пенсию<br>";
} elseif ($age < 18 && $age > 0) {
    echo "Вам ещё рано работать<br>";
} else {
    echo "Неизвестный возраст<br>";
}

//1.4

$day = mt_rand(1,11);

switch ($day) {
    case 1:
        echo "Это рабочий день<br>";
        break;
    case 2:
        echo "Это рабочий день<br>";
        break;
    case 3:
        echo "Это рабочий день<br>";
        break;
    case 4:
        echo "Это рабочий день<br>";
        break;
    case 5:
        echo "Это рабочий день<br>";
        break;
    case 6:
        echo "Это выходной<br>";
        break;
    case 7:
        echo "Это выходной<br>";
        break;
    default :
        echo "Неизвестный день<br>";
}

//1.5

$bmw = ["model" => "x5", "speed" => 120, "doors" => 5, "year" => 2015];
$toyota = ["model" => "speedy", "speed" => 150, "doors" => 4, "year" => 2055];
$opel = ["model" => "astra", "speed" => 90, "doors" => 3, "year" => 2003];

$cars = ["bmw"=>$bmw, "toyota" => $toyota, "opel" => $opel];

//echo "<pre>";

//print_r($cars["bmw"]);

foreach ($cars as $k => $v) {
    echo "Car $k<br>";
    foreach ($v as $key => $value) {
        echo "$value ";
    }
    echo "<br>";
}

//1.6

$rows = 10;
$cols = 10;

echo "<table  border='1'align='center' width='250' >";

for ($tr = 1; $tr <= $rows; $tr++) {

    echo "<tr>";

    for ($td = 1; $td <= $cols; $td++) {
        if ($td % 2 == 0 && $tr % 2 == 0){
            echo "<td>" . "(" . $td * $tr . ")" . "</td>\n";
            //   echo  "(" . $td*$tr. ")";
        } else if  ($td % 2 != 0 && $tr % 2 != 0){
            echo "<td>" . "[" . $td * $tr . "]". "</td>\n";
        }else {
            echo "<td>" . $td * $tr . "</td>\n";
        }
    }

    echo "</tr>";
}

echo "</table>";