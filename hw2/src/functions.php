<?php

//2.1

function task1($implode, $arr)
{
    if ($implode) {
            echo implode(' ',$arr);

    } else {
            echo implode('<p>', $arr);
            echo '</p>';
    }
}



//2.2

function task2(...$args)
{
    $operation = $args[0];
    $args = func_get_args();
    $result = 1;
    for ($i = 1; $i < sizeof($args); $i++) {
        if (is_int($args[$i]) || is_float($args[$i])) {

            if ($operation == '+') {
                $result += $args[$i];
            } elseif ($operation == '*') {
                $result *= $args[$i];
            } elseif ($operation == '/') {
                if ($args[$i] == 0) {
                    trigger_error("Деление на ноль" . $args[$i]);
                } else {
                    $result /= $args[$i];
                }
            } elseif ($operation == '-') {
                $result -= $args[$i];
            }
        } else {
            trigger_error('Некорректный аргумент: ' . "\"" . $args[$i] . "\"");
        }

    }
    return $result;
}


//2.3

function task3($int1, $int2)
{

    if (is_int($int1) && is_int($int2)) {
        echo "<table  border='1'align='center' width='250' >";
        for ($tr = 1; $tr <= $int1; $tr++) {

            echo "<tr>";

            for ($td = 1; $td <= $int2; $td++) {
                echo "<td>" . $td * $tr . "</td>\n";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Nekorektnie dannie';
    }
}

//2.6
function task4($fileName, $text) {
    $fp = fopen($fileName, 'a');
    file_put_contents($fileName, $text);
    fclose($fp);
}

function task5($fileName) {
    $fp = fopen($fileName, 'r');
    $data = fgets($fp);
    var_dump($data);
    fclose($fp);
}

