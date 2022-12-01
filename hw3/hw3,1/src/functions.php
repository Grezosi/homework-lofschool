<?php

function createArray($usersNumber, $names = []): array
{
    $result = [];
    for ($i = 1; $i <= $usersNumber; $i++) {
        $arr = [['id' => $i, 'name' => array_rand(array_flip($names)), 'age' => mt_rand(18, 45)]];
        $result = array_merge($result, $arr);
    }
    return $result;
}
