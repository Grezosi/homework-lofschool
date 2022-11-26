<?php

//2.1

function task1($bool, $arr)
{
    if ($bool == true) {
        foreach ($arr as $item) {
            echo $item . ' ';
        }
    } else {
        foreach ($arr as $item) {
            echo '<p>' . $item . '</p>';
        }
    }
}



//2.2

function task2(...$args)
{
    $operation = $args[0];
    $args = func_get_args();
    $result = 1;
    for ($i = 1; $i < sizeof($args); $i++) {
        if ($operation == '+') {
            $result += $args[$i];
        } elseif ($operation == '*') {
            $result *= $args[$i];
        } else {
            echo 'Unknown text';
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




